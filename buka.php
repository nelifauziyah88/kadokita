<?php
require __DIR__ . '/config/pdo.php';

$slug = trim($_GET['slug'] ?? '');

if ($slug === '') {
    http_response_code(400);
    echo "Slug tidak ada.";
    exit;
}

$stmt = $pdo->prepare("SELECT type FROM greetings WHERE slug = :slug LIMIT 1");
$stmt->execute([':slug' => $slug]);
$row = $stmt->fetch();

if (!$row) {
    http_response_code(404);
    echo "Ucapan tidak ditemukan.";
    exit;
}

$type = $row['type'];

switch ($type) {
    case 'balon':
        header("Location: balon_ucapan_penerima.php?slug=" . urlencode($slug));
        break;

    case 'kartu':
        header("Location: kartu_ucapan_penerima.php?slug=" . urlencode($slug));
        break;

    case 'kotak':
    default:
        header("Location: kotak_kado_penerima.php?slug=" . urlencode($slug));
        break;
}

exit;
