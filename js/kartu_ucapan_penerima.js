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

  if (g.type && g.type !== 'kartu') {
    alert("Link ini bukan untuk Kartu Ucapan.");
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
    photoEl.src = "/birthday-website/" + g.photo_path;
    photoEl.onload = () => {
      photoWrap.style.display = "block";
    };
  }
}

loadGreeting();

const COLORS = [
  "#60A5FA",
  "#BFDBFE",
  "#3B82F6",
  "#93C5FD",
  "#FDE68A",
  "#6EE7B7",
  "#F9A8D4",
  "#A5B4FC",
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

const envelope = document.getElementById("envelope");
const stageAmplop = document.getElementById("stageAmplop");
const stageSurat = document.getElementById("stageSurat");
const clickHint = document.getElementById("clickHint");

const birthdaySong = document.getElementById("birthdaySong");
birthdaySong.volume = 0.7;

let opened = false;

envelope.addEventListener("click", () => {
  if (opened) return;
  opened = true;

  clickHint.style.opacity = "0";

  envelope.classList.add("shake");

  setTimeout(() => {
    envelope.classList.remove("shake");

    envelope.classList.add("opening");

    setTimeout(() => {
      launchConfetti(110);

      setTimeout(() => {
        envelope.classList.remove("opening");
        envelope.classList.add("flyaway");

        setTimeout(() => {
          stageAmplop.style.transition = "opacity 0.3s, transform 0.3s";
          stageAmplop.style.opacity = "0";
          stageAmplop.style.transform = "scale(0.85)";

          setTimeout(() => {
            stageAmplop.style.display = "none";
            stageSurat.classList.add("show");

            birthdaySong.currentTime = 0;
            birthdaySong.play().catch(() => {});

            setTimeout(() => launchConfetti(55), 300);
          }, 350);
        }, 300);
      }, 450);
    }, 500);
  }, 400);
});

envelope.addEventListener("mouseenter", () => {
  if (!opened) {
    envelope.style.animationPlayState = "paused";
    envelope.style.transform = "scale(1.06) rotate(2deg)";
    envelope.style.transition = "transform 0.2s ease";
  }
});

envelope.addEventListener("mouseleave", () => {
  if (!opened) {
    envelope.style.transform = "";
    envelope.style.transition = "";
    envelope.style.animationPlayState = "running";
  }
});
