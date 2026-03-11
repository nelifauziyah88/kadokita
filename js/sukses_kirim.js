const COLORS = [
  "#F472B6",
  "#C084FC",
  "#60A5FA",
  "#FBCFE8",
  "#FDE68A",
  "#6EE7B7",
  "#F9A8D4",
  "#A5B4FC",
];
const SHAPES = ["circle", "rect", "triangle"];

function launchConfetti(count = 70) {
  const container = document.getElementById("confettiContainer");
  if (!container) return;

  for (let i = 0; i < count; i++) {
    const el = document.createElement("div");
    const color = COLORS[Math.floor(Math.random() * COLORS.length)];
    const shape = SHAPES[Math.floor(Math.random() * SHAPES.length)];
    const size = 6 + Math.random() * 10;
    const left = Math.random() * 100;
    const delay = Math.random() * 0.8;
    const dur = 1.5 + Math.random() * 1.5;

    el.classList.add("confetti-piece");
    el.style.cssText = `
      left: ${left}%;
      top: -20px;
      width: ${size}px;
      height: ${size}px;
      background: ${color};
      border-radius: ${shape === "circle" ? "50%" : "2px"};
      clip-path: ${shape === "triangle" ? "polygon(50% 0%, 0% 100%, 100% 100%)" : "none"};
      animation-duration: ${dur}s;
      animation-delay: ${delay}s;
    `;
    container.appendChild(el);
    setTimeout(() => el.remove(), (dur + delay + 0.3) * 1000);
  }
}

window.addEventListener("load", () => {
  setTimeout(() => launchConfetti(80), 400);
});

function getShareUrl() {
  const el = document.getElementById("urlText");
  if (!el) return "";

  let url = (el.dataset.url || el.textContent || "").trim();

  url = url.replace(/&amp;/g, "&");

  return url;
}

function copyUrl() {
  const btn = document.getElementById("btnCopy");
  const url = getShareUrl();

  if (!url) {
    alert("URL tidak ditemukan");
    return;
  }

  navigator.clipboard
    .writeText(url)
    .then(() => {
      if (!btn) return;

      btn.classList.add("copied");
      btn.innerHTML = `
      <svg viewBox="0 0 24 24" style="width:17px;height:17px;stroke:#fff;fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round">
        <polyline points="20 6 9 17 4 12"/>
      </svg>
      URL Tersalin!`;

      setTimeout(() => {
        btn.classList.remove("copied");
        btn.innerHTML = `
        <svg viewBox="0 0 24 24" style="width:17px;height:17px;stroke:currentColor;fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round">
          <rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/>
        </svg>
        Salin URL`;
      }, 2500);
    })
    .catch(() => {
      alert("Gagal menyalin URL (izin clipboard ditolak)");
    });
}

function shareUrl() {
  const url = getShareUrl();
  if (!url) return alert("URL tidak ditemukan");

  if (navigator.share) {
    navigator
      .share({
        title: "KadoKita – Kado Digital Spesial",
        text: `Hai! Ada kado spesial untukmu dari KadoKita`,
        url: url,
      })
      .catch(() => {});
  } else {
    copyUrl();
  }
}
