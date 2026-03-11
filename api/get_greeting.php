<?php
declare(strict_types=1);

require __DIR__ . '/db.php';

function json_out(int $code, array $data): void
{
    http_response_code($code);
    echo json_encode($data);
    exit;
}

$slug = trim($_GET['slug'] ?? '');
if ($slug === '') {
    json_out(422, ['ok' => false, 'error' => 'Slug kosong']);
}

$stmt = $pdo->prepare("
  SELECT recipient_name, sender_name, message, photo_path, created_at, type
  FROM greetings
  WHERE slug = :slug
  LIMIT 1
");
$stmt->execute([':slug' => $slug]);
$row = $stmt->fetch();

if (!$row) {
    json_out(404, ['ok' => false, 'error' => 'Ucapan tidak ditemukan']);
}

json_out(200, [
    'ok' => true,
    'data' => $row
]);
