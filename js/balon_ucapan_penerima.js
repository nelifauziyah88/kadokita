const slug = new URLSearchParams(window.location.search).get("slug");

async function loadGreeting() {
  if (!slug) {
    alert("Link tidak valid (slug kosong)");
    return;
  }

  const res = await fetch(
    "/birthday-website/api/get_greeting.php?slug=" + encodeURIComponent(slug),
  );
  const json = await res.json();

  if (!json.ok) {
    alert(json.error || "Ucapan tidak ditemukan");
    return;
  }

  const g = json.data;

  if (g.type && g.type !== "balon") {
    alert("Link ini bukan untuk Balon Ucapan.");
    return;
  }

  document.getElementById("senderName").textContent = g.sender_name;
  document.getElementById("receiverName").textContent = g.recipient_name;
  document.getElementById("letterReceiver").textContent = g.recipient_name;
  document.getElementById("letterSender").textContent = g.sender_name;
  document.getElementById("letterMessage").textContent = g.message;

  if (g.photo_path) {
    const photoWrap = document.getElementById("letterPhotoWrap");
    const photoEl = document.getElementById("letterPhoto");

    photoEl.onload = () => {
      photoWrap.classList.add("show");
    };

    photoEl.onerror = () => {
      photoWrap.classList.remove("show");
    };

    photoEl.src = "/birthday-website/" + g.photo_path;
  }
}

loadGreeting();

const COLORS = [
  "#C084FC",
  "#DDD6FE",
  "#A855F7",
  "#F9A8D4",
  "#FDE68A",
  "#6EE7B7",
  "#93C5FD",
  "#E879F9",
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

const balloon = document.getElementById("balloon");
const stageBalon = document.getElementById("stageBalon");
const stageSurat = document.getElementById("stageSurat");
const clickHint = document.getElementById("clickHint");

const birthdaySong = document.getElementById("birthdaySong");
birthdaySong.volume = 0.7;

let popped = false;

balloon.addEventListener("click", () => {
  if (popped) return;
  popped = true;

  clickHint.style.opacity = "0";

  balloon.classList.add("shake");

  setTimeout(() => {
    balloon.classList.remove("shake");

    launchConfetti(120);
    balloon.classList.add("popping");

    setTimeout(() => {
      stageBalon.style.transition = "opacity 0.3s, transform 0.3s";
      stageBalon.style.opacity = "0";
      stageBalon.style.transform = "scale(0.85)";

      setTimeout(() => {
        stageBalon.style.display = "none";
        stageSurat.classList.add("show");

        birthdaySong.currentTime = 0;
        birthdaySong.play().catch(() => {});

        setTimeout(() => launchConfetti(60), 300);
      }, 350);
    }, 350);
  }, 400);
});
