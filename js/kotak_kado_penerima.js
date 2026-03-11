const slug = new URLSearchParams(window.location.search).get('slug');

async function loadGreeting() {
  if (!slug) {
    alert("Link tidak valid (slug kosong)");
    return;
  }

  const res = await fetch("/birthday-website/api/get_greeting.php?slug=" + encodeURIComponent(slug));
  const json = await res.json();

  if (!json.ok) {
    alert(json.error || "Ucapan tidak ditemukan");
    return;
  }

  const g = json.data;

  document.getElementById("senderName").textContent = g.sender_name;
  document.getElementById("receiverName").textContent = g.recipient_name;
  document.getElementById("letterReceiver").textContent = g.recipient_name;
  document.getElementById("letterSender").textContent = g.sender_name;
  document.getElementById("letterMessage").textContent = g.message;

  if (g.photo_path) {
    const photoWrap = document.getElementById("letterPhotoWrap");
    const photoEl = document.getElementById("letterPhoto");

    photoEl.src = "/birthday-website/" + g.photo_path;

    photoEl.onload = () => photoWrap.classList.add("show");
    photoEl.onerror = () => {};
  }
}

loadGreeting();

const COLORS = [
  "#F472B6",
  "#FBCFE8",
  "#C084FC",
  "#FDE68A",
  "#6EE7B7",
  "#93C5FD",
  "#F9A8D4",
  "#A855F7",
];
const SHAPES = ["circle", "rect", "triangle"];

function launchConfetti(count = 80) {
  const container = document.getElementById("confettiContainer");
  container.innerHTML = "";

  for (let i = 0; i < count; i++) {
    const el = document.createElement("div");
    const color = COLORS[Math.floor(Math.random() * COLORS.length)];
    const shape = SHAPES[Math.floor(Math.random() * SHAPES.length)];
    const size = 6 + Math.random() * 10;
    const left = Math.random() * 100;
    const delay = Math.random() * 0.6;
    const dur = 1.4 + Math.random() * 1.2;

    el.classList.add("confetti-piece");
    el.style.cssText = `
      left: ${left}%;
      top: -20px;
      width: ${size}px;
      height: ${size}px;
      background: ${color};
      border-radius: ${shape === "circle" ? "50%" : shape === "rect" ? "2px" : "0"};
      clip-path: ${shape === "triangle" ? "polygon(50% 0%, 0% 100%, 100% 100%)" : "none"};
      animation-duration: ${dur}s;
      animation-delay: ${delay}s;
    `;
    container.appendChild(el);
    setTimeout(() => el.remove(), (dur + delay + 0.2) * 1000);
  }
}

const giftBox = document.getElementById("giftBox");
const giftWrap = document.getElementById("giftWrap");
const clickHint = document.getElementById("clickHint");
const letterWrap = document.getElementById("letterWrap");
const stageIntro = document.getElementById("stageIntro");

const birthdaySong = document.getElementById("birthdaySong");
birthdaySong.volume = 0.7;

let opened = false;

giftBox.addEventListener("click", () => {
  if (opened) return;
  opened = true;

  clickHint.style.opacity = "0";

  giftBox.classList.add("opening");

  setTimeout(() => {
    launchConfetti(100);

    setTimeout(() => {
      giftBox.classList.remove("opening");
      giftBox.classList.add("explode");

      setTimeout(() => {
        giftWrap.style.transition = "opacity 0.3s, transform 0.3s";
        giftWrap.style.opacity = "0";
        giftWrap.style.transform = "scale(0.8)";
        stageIntro.style.transition = "opacity 0.3s";
        stageIntro.style.opacity = "0";

        setTimeout(() => {
          giftWrap.style.display = "none";
          stageIntro.style.display = "none";
          letterWrap.classList.add("show");

          birthdaySong.currentTime = 0;
          birthdaySong.play().catch(() => {});

          setTimeout(() => launchConfetti(60), 300);
        }, 350);
      }, 400);
    }, 300);
  }, 500);
});

giftBox.addEventListener("mouseenter", () => {
  if (!opened) {
    giftBox.style.animationPlayState = "paused";
    giftBox.style.transform = "scale(1.06) rotate(2deg)";
    giftBox.style.transition = "transform 0.2s ease";
  }
});

giftBox.addEventListener("mouseleave", () => {
  if (!opened) {
    giftBox.style.transform = "";
    giftBox.style.transition = "";
    giftBox.style.animationPlayState = "running";
  }
});
