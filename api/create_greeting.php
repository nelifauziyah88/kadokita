<?php
declare(strict_types=1);

require __DIR__ . '/db.php';

function json_out(int $code, array $data): void {
  http_response_code($code);
  echo json_encode($data);
  exit;
}

function generateSlug(int $bytes = 16): string {
  return bin2hex(random_bytes($bytes));
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  json_out(405, ['ok' => false, 'error' => 'Method not allowed']);
}

$recipient = trim($_POST['recipient_name'] ?? '');
$sender    = trim($_POST['sender_name'] ?? '');
$message   = trim($_POST['message'] ?? '');
$type      = trim($_POST['type'] ?? 'kotak'); 

$allowedTypes = ['kotak','balon','kartu'];
if (!in_array($type, $allowedTypes, true)) {
  $type = 'kotak';
}

if ($recipient === '' || $sender === '' || $message === '') {
  json_out(422, ['ok' => false, 'error' => 'Semua field wajib diisi']);
}

$photoPath = null;

/* ===== Upload Foto (opsional) ===== */
if (isset($_FILES['photo']) && $_FILES['photo']['error'] !== UPLOAD_ERR_NO_FILE) {

  if ($_FILES['photo']['error'] !== UPLOAD_ERR_OK) {
    json_out(400, ['ok' => false, 'error' => 'Upload foto gagal']);
  }

  if ($_FILES['photo']['size'] > 5 * 1024 * 1024) {
    json_out(413, ['ok' => false, 'error' => 'Ukuran foto maksimal 5MB']);
  }

  $tmp = $_FILES['photo']['tmp_name'];

  $finfo = new finfo(FILEINFO_MIME_TYPE);
  $mime  = $finfo->file($tmp);

  $allowed = [
    'image/jpeg' => 'jpg',
    'image/png'  => 'png',
    'image/webp' => 'webp',
  ];

  if (!isset($allowed[$mime])) {
    json_out(415, ['ok' => false, 'error' => 'Format foto harus JPG/PNG/WEBP']);
  }

  $ext = $allowed[$mime];

  $dir = __DIR__ . '/../uploads/greetings/';
  if (!is_dir($dir)) mkdir($dir, 0755, true);

  $filename  = bin2hex(random_bytes(12)) . '.' . $ext;
  $destFs    = $dir . $filename;

  $photoPath = 'uploads/greetings/' . $filename;

  if (!move_uploaded_file($tmp, $destFs)) {
    json_out(500, ['ok' => false, 'error' => 'Gagal menyimpan foto']);
  }
}

/* ===== Insert DB ===== */
try {

  do {
    $slug = generateSlug(16);
    $check = $pdo->prepare("SELECT id FROM greetings WHERE slug = :slug LIMIT 1");
    $check->execute([':slug' => $slug]);
  } while ($check->fetch());

  $stmt = $pdo->prepare("
    INSERT INTO greetings 
    (slug, recipient_name, sender_name, message, photo_path, type)
    VALUES 
    (:slug, :recipient, :sender, :message, :photo, :type)
  ");

  $stmt->execute([
    ':slug' => $slug,
    ':recipient' => $recipient,
    ':sender' => $sender,
    ':message' => $message,
    ':photo' => $photoPath,
    ':type' => $type
  ]);

  json_out(200, [
    'ok' => true,
    'slug' => $slug
  ]);

} catch (Throwable $e) {
  json_out(500, ['ok' => false, 'error' => 'Server error']);
}