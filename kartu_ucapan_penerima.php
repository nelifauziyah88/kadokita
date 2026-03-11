<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kartu Ucapan</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/kartu_ucapan_penerima.css" />
</head>

<body>

    <div class="bg-canvas">
        <!-- background rows sama seperti punya kamu -->
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

        <div id="stageAmplop">

            <div class="stage-intro">
                <p class="hint-text">Ada kartu ucapan untukmu!</p>
                <p class="hint-sub">Dari <strong id="senderName"></strong> untuk <strong id="receiverName"></strong></p>
            </div>

            <div class="envelope-wrap">
                <div class="envelope" id="envelope">
                    <div class="envelope-flap" id="envelopeFlap">
                        <div class="flap-inner"></div>
                    </div>
                    <div class="envelope-body">
                        <div class="envelope-line-left"></div>
                        <div class="envelope-line-right"></div>
                        <div class="envelope-heart"></div>
                    </div>
                </div>
                <p class="click-hint" id="clickHint">Ketuk untuk membuka!</p>
            </div>

        </div>

        <div id="stageSurat" class="letter-wrap">

            <div class="letter-card">

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

                <a href="kartu_ucapan.php" class="btn-reply">
                    <svg viewBox="0 0 24 24">
                        <rect x="2" y="5" width="20" height="14" rx="2" />
                        <path d="M2 9l10 6 10-6" />
                    </svg>
                    Balas dengan Kartu
                </a>

            </div>
        </div>
    </div>

    <audio id="birthdaySong" preload="auto" loop>
        <source src="assets/audio/hbd_piano.mp3" type="audio/mpeg">
    </audio>

    <script src="js/kartu_ucapan_penerima.js"></script>
</body>

</html>