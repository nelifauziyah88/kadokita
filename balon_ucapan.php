<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Balon Ucapan</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/balon_ucapan.css?v=1" />
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

    <div class="page">

        <!-- Nav -->
        <div class="top-nav">
            <a href="landing_page.php" class="top-logo">
                <span class="kado">Kado</span><span class="kita">Kita</span>
            </a>
        </div>

        <!-- Header -->
        <div class="page-header">
            <div class="icon-wrap">
                <svg viewBox="0 0 24 24">
                    <ellipse cx="12" cy="9" rx="7" ry="9" />
                    <path d="M12 18 L12 22" />
                    <path d="M10 22 Q12 20 14 22" />
                    <path d="M8 5 Q10 3 12 4" />
                </svg>
            </div>
            <h1>Buat Balon Ucapan</h1>
            <p>Isi detail di bawah untuk membuat kartu ucapan spesial</p>
        </div>

        <!-- Form -->
        <div class="form-card">

            <!-- Upload Foto -->
            <div class="field-group">
                <label>
                    <svg viewBox="0 0 24 24">
                        <rect x="3" y="3" width="18" height="18" rx="2" />
                        <circle cx="8.5" cy="8.5" r="1.5" />
                        <polyline points="21 15 16 10 5 21" />
                    </svg>
                    Upload Foto
                </label>
                <div class="upload-area" id="uploadArea">
                    <input type="file" id="fotoInput" accept="image/*" />
                    <div class="upload-placeholder" id="uploadPlaceholder">
                        <div class="upload-icon">
                            <svg viewBox="0 0 24 24">
                                <polyline points="16 16 12 12 8 16" />
                                <line x1="12" y1="12" x2="12" y2="21" />
                                <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3" />
                            </svg>
                        </div>
                        <p>Klik untuk upload foto</p>
                        <span>PNG, JPG, WEBP – maks. 5MB</span>
                    </div>
                    <img class="preview-img" id="previewImg" alt="Preview foto" />
                </div>
            </div>

            <!-- Nama Penerima -->
            <div class="field-group">
                <label>
                    <svg viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                        <circle cx="12" cy="7" r="4" />
                    </svg>
                    Nama Penerima
                </label>
                <input type="text" id="namaPenerima" placeholder="Siapa yang menerima kado ini?" />
            </div>

            <!-- Nama Pengirim -->
            <div class="field-group">
                <label>
                    <svg viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                        <circle cx="12" cy="7" r="4" />
                    </svg>
                    Nama Pengirim
                </label>
                <input type="text" id="namaPengirim" placeholder="Namamu sebagai pengirim" />
            </div>

            <!-- Tulis Ucapan -->
            <div class="field-group">
                <label>
                    <svg viewBox="0 0 24 24">
                        <path d="M12 20h9" />
                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
                    </svg>
                    Tulis Ucapan
                </label>
                <textarea id="ucapan" maxlength="500" placeholder="Tulis ucapan terbaikmu di sini..."></textarea>
                <div class="char-count"><span id="charCount">0</span> / 500</div>
            </div>

            <!-- Submit -->
            <button class="btn-submit" id="btnBuat">
                <svg viewBox="0 0 24 24">
                    <ellipse cx="12" cy="9" rx="7" ry="9" />
                    <path d="M12 18 L12 22" />
                    <path d="M10 22 Q12 20 14 22" />
                </svg>
                Buat Ucapan
            </button>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-inner">
            <div>
                <div class="footer-logo"><span class="kado">Kado</span><span class="kita">Kita</span></div>
                <p class="footer-tagline">Cara simpel buat ngasih kado ucapan yang hangat dan personal.</p>
            </div>
            <div class="footer-col">
                <h4>Pembuat</h4>
                <a href="https://github.com/nelifauziyah88" target="_blank">
                    <svg viewBox="0 0 24 24">
                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
                    </svg>
                    GitHub Profile
                </a>
                <a href="mailto:hello@kadokita.id">
                    <svg viewBox="0 0 24 24">
                        <rect x="2" y="5" width="20" height="14" rx="2" />
                        <path d="M2 9l10 6 10-6" />
                    </svg>
                    basehub35@gmail.com
                </a>
            </div>
            <div class="footer-col">
                <h4>Legal</h4>
                <a href="syarat_ketentuan.php">Syarat &amp; Ketentuan</a>
                <a href="kebijakan_privasi.php">Kebijakan Privasi</a>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© 2026 <strong>KadoKita</strong>. Dibuat dengan 💖</span>
            <span>All rights reserved.</span>
        </div>
    </footer>

    <script src="js/balon_ucapan.js"></script>
</body>

</html>