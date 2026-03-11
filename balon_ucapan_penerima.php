<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Balon Ucapan</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/balon_ucapan_penerima.css" />
</head>

<body>

    <!-- Background -->
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

    <!-- Confetti -->
    <div class="confetti-container" id="confettiContainer"></div>

    <div class="page">

        <!-- Logo -->
        <a href="landing_page.php" class="top-logo">
            <span class="kado">Kado</span><span class="kita">Kita</span>
        </a>

        <div id="stageBalon">

            <div class="stage-intro">
                <p class="hint-text">Ada balon ucapan untukmu!</p>
                <p class="hint-sub">Dari <strong id="senderName"></strong> untuk <strong id="receiverName"></strong></p>
            </div>

            <div class="balloon-wrap">
                <div class="balloon" id="balloon">
                    <div class="balloon-body">
                        <div class="balloon-shine"></div>
                        <span class="balloon-emoji"></span>
                    </div>
                    <div class="balloon-knot"></div>
                    <div class="balloon-string"></div>
                </div>
                <p class="click-hint" id="clickHint">Ketuk untuk memecahkan!</p>
            </div>

        </div>

        <div id="stageSurat" class="letter-wrap">
            <div class="letter-card">

                <!-- Foto: default disembunyiin, nanti JS yang munculin kalau ada -->
                <div class="letter-photo-wrap" id="letterPhotoWrap" style="display:none;">
                    <img class="letter-photo" id="letterPhoto" src="" alt="Foto ucapan" />
                </div>

                <div class="letter-header">
                    <div class="letter-icon">💌</div>
                    <p class="letter-from">Sebuah pesan untukmu</p>
                </div>

                <h2 class="letter-to">Untuk <span id="letterReceiver"></span></h2>

                <div class="letter-message" id="letterMessage"></div>

                <div class="letter-signature">
                    <span>Dengan penuh cinta,</span>
                    <strong id="letterSender"></strong>
                </div>

                <a href="balon_ucapan.php" class="btn-reply">
                    <svg viewBox="0 0 24 24">
                        <ellipse cx="12" cy="9" rx="7" ry="9" />
                        <path d="M12 18 L12 22" />
                        <path d="M10 22 Q12 20 14 22" />
                    </svg>
                    Balas dengan Balon
                </a>

            </div>
        </div>
    </div>

    <!-- Audio Lagu Ultah -->
    <audio id="birthdaySong" preload="auto" loop>
        <source src="assets/audio/hbd_piano.mp3" type="audio/mpeg">
    </audio>

    <script src="js/balon_ucapan_penerima.js"></script>
</body>

</html>