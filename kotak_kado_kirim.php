<?php
declare(strict_types=1);

require __DIR__ . '/config/pdo.php';

$slug = $_GET['slug'] ?? '';
$slug = trim($slug);

if ($slug === '') {
  http_response_code(400);
  echo "Slug tidak ada.";
  exit;
}

$stmt = $pdo->prepare("SELECT recipient_name FROM greetings WHERE slug = :slug LIMIT 1");
$stmt->execute([':slug' => $slug]);
$row = $stmt->fetch();

if (!$row) {
  http_response_code(404);
  echo "Ucapan tidak ditemukan.";
  exit;
}

$receiver = $row['recipient_name'];

$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
$shareUrl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST']
  . $basePath . "/buka.php?slug=" . urlencode($slug);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kado Siap Dikirim</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/sukses_kirim.css" />
</head>

<body data-theme="pink">

    <div class="bg-canvas">
        <div class="bg-row"><span class="ic gift"></span><span class="ic star"></span><span class="ic heart"></span><span class="ic gift"></span><span class="ic balloon"></span><span class="ic star"></span><span class="ic heart"></span></div>
        <div class="bg-row offset"><span class="ic star"></span><span class="ic heart"></span><span class="ic gift"></span><span class="ic balloon"></span><span class="ic star"></span><span class="ic heart"></span><span class="ic gift"></span></div>
        <div class="bg-row"><span class="ic heart"></span><span class="ic balloon"></span><span class="ic star"></span><span class="ic gift"></span><span class="ic heart"></span><span class="ic balloon"></span><span class="ic star"></span></div>
        <div class="bg-row offset"><span class="ic gift"></span><span class="ic star"></span><span class="ic heart"></span><span class="ic gift"></span><span class="ic balloon"></span><span class="ic star"></span><span class="ic heart"></span></div>
        <div class="bg-row"><span class="ic balloon"></span><span class="ic heart"></span><span class="ic gift"></span><span class="ic star"></span><span class="ic balloon"></span><span class="ic heart"></span><span class="ic gift"></span></div>
        <div class="bg-row offset"><span class="ic star"></span><span class="ic gift"></span><span class="ic balloon"></span><span class="ic heart"></span><span class="ic star"></span><span class="ic gift"></span><span class="ic balloon"></span></div>
        <div class="bg-row"><span class="ic heart"></span><span class="ic balloon"></span><span class="ic star"></span><span class="ic gift"></span><span class="ic heart"></span><span class="ic balloon"></span><span class="ic star"></span></div>
        <div class="bg-row offset"><span class="ic gift"></span><span class="ic star"></span><span class="ic heart"></span><span class="ic balloon"></span><span class="ic star"></span><span class="ic heart"></span><span class="ic gift"></span></div>
        <div class="bg-row"><span class="ic star"></span><span class="ic heart"></span><span class="ic gift"></span><span class="ic balloon"></span><span class="ic star"></span><span class="ic heart"></span><span class="ic gift"></span></div>
        <div class="bg-row offset"><span class="ic heart"></span><span class="ic balloon"></span><span class="ic gift"></span><span class="ic star"></span><span class="ic heart"></span><span class="ic balloon"></span><span class="ic star"></span></div>
    </div>

    <div class="confetti-container" id="confettiContainer"></div>

    <div class="page">

        <a href="landing_page.php" class="top-logo">
            <span class="kado">Kado</span><span class="kita">Kita</span>
        </a>

        <div class="success-wrap">

            <!-- Ikon preview -->
            <div class="preview-icon-wrap">
                <div class="preview-circle">
                    <svg class="preview-icon" viewBox="0 0 24 24">
                        <rect x="3" y="9" width="18" height="13" rx="2" />
                        <path d="M3 9h18M12 9V22M12 9c0-2.5-3-4-3-4s1 3 3 4zm0 0c0-2.5 3-4 3-4s-1 3-3 4z" />
                        <path d="M9 5a3 3 0 0 0 3 4 3 3 0 0 0 3-4" />
                    </svg>
                </div>
            </div>

            <h1 class="success-title">Selamat! Kotak kado siap dikirim</h1>
            <p class="success-sub">Bagikan link ini ke <strong><?= htmlspecialchars($receiver) ?></strong> agar mereka bisa membuka kadunya!</p>

            <!-- URL Box -->
            <div class="url-box">
                <span class="url-text" id="urlText"><?= htmlspecialchars($shareUrl) ?></span>
            </div>

            <!-- Tombol -->
            <button class="btn-copy" id="btnCopy" onclick="copyUrl()">
                <svg viewBox="0 0 24 24">
                    <rect x="9" y="9" width="13" height="13" rx="2" />
                    <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1" />
                </svg>
                Salin URL
            </button>

            <button class="btn-share" id="btnShare" onclick="shareUrl()">
                <svg viewBox="0 0 24 24">
                    <circle cx="18" cy="5" r="3" />
                    <circle cx="6" cy="12" r="3" />
                    <circle cx="18" cy="19" r="3" />
                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49" />
                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49" />
                </svg>
                Bagikan
            </button>

            <a href="landing_page.php" class="btn-home">Buat Kado Lainnya</a>

        </div>
    </div>

    <script>
        const SHARE_URL = "<?= htmlspecialchars($shareUrl) ?>";
        const RECEIVER = "<?= htmlspecialchars($receiver) ?>";
    </script>
    <script src="js/sukses_kirim.js"></script>
</body>

</html>