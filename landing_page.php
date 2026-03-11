<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KadoKita</title>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/landing_style.css?v=1"/>
</head>

<body>

  <!-- Animated Background -->
  <div class="bg-canvas">
    <div class="bg-track">
      <!-- Row pattern repeated -->
      <div class="bg-row">
        <span class="ic gift"></span><span class="ic star"></span><span class="ic heart"></span><span class="ic gift"></span><span class="ic balloon"></span><span class="ic star"></span><span class="ic heart"></span>
      </div>
      <div class="bg-row offset">
        <span class="ic star"></span><span class="ic heart"></span><span class="ic gift"></span><span class="ic balloon"></span><span class="ic star"></span><span class="ic heart"></span><span class="ic gift"></span>
      </div>
      <div class="bg-row">
        <span class="ic heart"></span><span class="ic balloon"></span><span class="ic star"></span><span class="ic gift"></span><span class="ic heart"></span><span class="ic balloon"></span><span class="ic star"></span>
      </div>
      <div class="bg-row offset">
        <span class="ic gift"></span><span class="ic star"></span><span class="ic heart"></span><span class="ic gift"></span><span class="ic balloon"></span><span class="ic star"></span><span class="ic heart"></span>
      </div>
      <div class="bg-row">
        <span class="ic balloon"></span><span class="ic heart"></span><span class="ic gift"></span><span class="ic star"></span><span class="ic balloon"></span><span class="ic heart"></span><span class="ic gift"></span>
      </div>
      <div class="bg-row offset">
        <span class="ic star"></span><span class="ic gift"></span><span class="ic balloon"></span><span class="ic heart"></span><span class="ic star"></span><span class="ic gift"></span><span class="ic balloon"></span>
      </div>
      <div class="bg-row">
        <span class="ic heart"></span><span class="ic balloon"></span><span class="ic star"></span><span class="ic gift"></span><span class="ic heart"></span><span class="ic balloon"></span><span class="ic star"></span>
      </div>
      <div class="bg-row offset">
        <span class="ic gift"></span><span class="ic star"></span><span class="ic heart"></span><span class="ic gift"></span><span class="ic balloon"></span><span class="ic star"></span><span class="ic heart"></span>
      </div>
      <!-- Duplikat seamless loop -->
      <div class="bg-row">
        <span class="ic gift"></span><span class="ic star"></span><span class="ic heart"></span><span class="ic gift"></span><span class="ic balloon"></span><span class="ic star"></span><span class="ic heart"></span>
      </div>
      <div class="bg-row offset">
        <span class="ic star"></span><span class="ic heart"></span><span class="ic gift"></span><span class="ic balloon"></span><span class="ic star"></span><span class="ic heart"></span><span class="ic gift"></span>
      </div>
      <div class="bg-row">
        <span class="ic heart"></span><span class="ic balloon"></span><span class="ic star"></span><span class="ic gift"></span><span class="ic heart"></span><span class="ic balloon"></span><span class="ic star"></span>
      </div>
      <div class="bg-row offset">
        <span class="ic gift"></span><span class="ic star"></span><span class="ic heart"></span><span class="ic gift"></span><span class="ic balloon"></span><span class="ic star"></span><span class="ic heart"></span>
      </div>
      <div class="bg-row">
        <span class="ic balloon"></span><span class="ic heart"></span><span class="ic gift"></span><span class="ic star"></span><span class="ic balloon"></span><span class="ic heart"></span><span class="ic gift"></span>
      </div>
      <div class="bg-row offset">
        <span class="ic star"></span><span class="ic gift"></span><span class="ic balloon"></span><span class="ic heart"></span><span class="ic star"></span><span class="ic gift"></span><span class="ic balloon"></span>
      </div>
      <div class="bg-row">
        <span class="ic heart"></span><span class="ic balloon"></span><span class="ic star"></span><span class="ic gift"></span><span class="ic heart"></span><span class="ic balloon"></span><span class="ic star"></span>
      </div>
      <div class="bg-row offset">
        <span class="ic gift"></span><span class="ic star"></span><span class="ic heart"></span><span class="ic gift"></span><span class="ic balloon"></span><span class="ic star"></span><span class="ic heart"></span>
      </div>
    </div>
  </div>

  <div class="page">

    <!-- Hero -->
    <section class="hero">
      <div class="logo">
        <span class="kado">Kado</span></span><span class="kita">Kita</span>
      </div>
      <p class="tagline">Buat kado ucapan online untuk teman, saudara, rekan, atau pasangan!</p>
    </section>

    <!-- Cards -->
    <section class="cards-section">
      <div class="cards-grid">

        <div class="card">
          <div class="card-icon-wrap">
            <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="9" width="18" height="13" rx="2" />
              <path d="M3 9h18M12 9V22M12 9c0-2.5-3-4-3-4s1 3 3 4zm0 0c0-2.5 3-4 3-4s-1 3-3 4z" />
              <path d="M9 5a3 3 0 0 0 3 4 3 3 0 0 0 3-4" />
            </svg>
          </div>
          <div class="card-title">Kotak Kado</div>
          <p class="card-desc">Kotak kado digital berisi pesan, foto, dan kejutan spesial untuk orang tersayang.</p>
          <a href="kotak_kado.php" class="card-btn">Mulai Sekarang</a>
        </div>

        <div class="card">
          <div class="card-icon-wrap">
            <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <ellipse cx="12" cy="9" rx="7" ry="9" />
              <path d="M12 18 L12 22" />
              <path d="M10 22 Q12 20 14 22" />
              <path d="M8 5 Q10 3 12 4" />
            </svg>
          </div>
          <div class="card-title">Balon Ucapan</div>
          <p class="card-desc">Kirim balon virtual warna-warni dengan kata-kata manis untuk momen spesial.</p>
          <a href="balon_ucapan.php" class="card-btn">Mulai Sekarang</a>
        </div>

        <div class="card">
          <div class="card-icon-wrap">
            <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="5" width="20" height="14" rx="2" />
              <path d="M2 9l10 6 10-6" />
              <path d="M7 14h3m-3 3h5" />
            </svg>
          </div>
          <div class="card-title">Kartu Ucapan</div>
          <p class="card-desc">Kartu eksklusif yang saat dibuka menampilkan foto dan pesan ulang tahun spesial.</p>
          <a href="kartu_ucapan.php" class="card-btn">Mulai Sekarang</a>
        </div>

      </div>
    </section>

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

  </div>

  <!-- SVG Sprites untuk background icons -->
  <svg style="display:none" xmlns="http://www.w3.org/2000/svg">
    <symbol id="ico-gift" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
      <rect x="3" y="9" width="18" height="13" rx="2" />
      <path d="M3 9h18M12 9V22M12 9c0-2.5-3-4-3-4s1 3 3 4zm0 0c0-2.5 3-4 3-4s-1 3-3 4z" />
      <path d="M9 5a3 3 0 0 0 3 4 3 3 0 0 0 3-4" />
    </symbol>
    <symbol id="ico-star" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
    </symbol>
    <symbol id="ico-heart" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
      <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
    </symbol>
    <symbol id="ico-balloon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
      <ellipse cx="12" cy="9" rx="7" ry="9" />
      <path d="M12 18 L12 22" />
      <path d="M10 22 Q12 20 14 22" />
    </symbol>
  </svg>

  <!-- <script src="js/landing_script.js"></script> -->
</body>

</html>