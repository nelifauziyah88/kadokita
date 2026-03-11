<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buka Kado</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/kotak_kado_penerima.css" />
</head>

<body>

    <!-- Static Background -->
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

    <!-- Confetti container -->
    <div class="confetti-container" id="confettiContainer"></div>

    <div class="page">

        <!-- Logo -->
        <a href="landing_page.php" class="top-logo">
            <span class="kado">Kado</span><span class="kita">Kita</span>
        </a>

        <!-- STAGE 1: Intro -->
        <div class="stage" id="stageIntro">
            <p class="hint-text">Kamu punya kado spesial!</p>
            <p class="hint-sub">Dari <strong id="senderName">Kakak Rara</strong> untuk <strong id="receiverName">Adik Dinda</strong></p>
        </div>

        <!-- STAGE 2: Kotak Kado -->
        <div class="gift-wrap" id="giftWrap">
            <div class="gift-box" id="giftBox">
                <!-- Tutup kado -->
                <div class="gift-lid" id="giftLid">
                    <div class="lid-ribbon"></div>
                </div>
                <!-- Badan kado -->
                <div class="gift-body">
                    <div class="body-ribbon-v"></div>
                    <div class="body-ribbon-h"></div>
                </div>
                <!-- Pita atas -->
                <div class="gift-bow">
                    <div class="bow-left"></div>
                    <div class="bow-right"></div>
                    <div class="bow-center"></div>
                </div>
            </div>
            <p class="click-hint" id="clickHint">Ketuk untuk membuka!</p>
        </div>

        <!-- STAGE 3: Kertas Ucapan -->
        <div class="letter-wrap" id="letterWrap">
            <div class="letter-card" id="letterCard">

                <div class="letter-photo-wrap" id="letterPhotoWrap">
                    <img class="letter-photo" id="letterPhoto" src="" alt="Foto kado" />
                </div>

                <div class="letter-header">
                    <div class="letter-icon">💌</div>
                    <p class="letter-from">Sebuah pesan untukmu</p>
                </div>

                <h2 class="letter-to">Untuk <span id="letterReceiver">Adik Dinda</span></h2>

                <div class="letter-message" id="letterMessage">
                    Selamat ulang tahun ya! Semoga hari-harimu selalu dipenuhi kebahagiaan dan semangat. Kamu adalah yang terbaik!
                </div>

                <div class="letter-signature">
                    <span>Dengan penuh cinta,</span>
                    <strong id="letterSender">Kakak Rara</strong>
                </div>

                <button class="btn-reply" onclick="window.location.href='kotak_kado.php'">
                    <svg viewBox="0 0 24 24">
                        <path d="M20 12V22H4V12" />
                        <path d="M22 7H2v5h20V7z" />
                        <path d="M12 22V7" />
                        <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z" />
                        <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z" />
                    </svg>
                    Balas dengan Kado
                </button>
            </div>
        </div>
    </div>

    <!-- Audio Lagu Ultah -->
    <audio id="birthdaySong" preload="auto" loop>
        <source src="assets/audio/hbd_piano.mp3" type="audio/mpeg">
    </audio>
    <script src="js/kotak_kado_penerima.js"></script>
</body>

</html>