const fotoInput = document.getElementById("fotoInput");
const previewImg = document.getElementById("previewImg");
const uploadArea = document.getElementById("uploadArea");
const uploadPlaceholder = document.getElementById("uploadPlaceholder");

fotoInput.addEventListener("change", () => {
  const file = fotoInput.files[0];
  if (!file) return;

  const reader = new FileReader();
  reader.onload = (e) => {
    previewImg.src = e.target.result;
    previewImg.classList.add("show");
    uploadPlaceholder.style.display = "none";
    uploadArea.classList.add("has-image");
  };
  reader.readAsDataURL(file);
});

const ucapanInput = document.getElementById("ucapan");
const charCount = document.getElementById("charCount");

ucapanInput.addEventListener("input", () => {
  charCount.textContent = ucapanInput.value.length;
});

const btnBuat = document.getElementById("btnBuat");

btnBuat.addEventListener("click", async (e) => {
  e.preventDefault();

  const penerima = document.getElementById("namaPenerima").value.trim();
  const pengirim = document.getElementById("namaPengirim").value.trim();
  const ucapan = ucapanInput.value.trim();

  if (!penerima || !pengirim || !ucapan) {
    if (!penerima) shakeField("namaPenerima");
    if (!pengirim) shakeField("namaPengirim");
    if (!ucapan) shakeField("ucapan");
    return;
  }

  const oldHtml = btnBuat.innerHTML;
  btnBuat.textContent = "Membuat ucapan...";
  btnBuat.disabled = true;

  try {
    const fd = new FormData();
    fd.append("recipient_name", penerima);
    fd.append("sender_name", pengirim);
    fd.append("message", ucapan);
    fd.append("type", "balon");

    if (fotoInput.files && fotoInput.files[0]) {
      fd.append("photo", fotoInput.files[0]);
    }

    const res = await fetch("/birthday-website/api/create_greeting.php", {
      method: "POST",
      body: fd,
    });

    const data = await res.json();

    if (!data.ok) {
      alert(data.error || "Gagal membuat ucapan");
      btnBuat.disabled = false;
      btnBuat.innerHTML = oldHtml;
      return;
    }

    window.location.href =
      "/birthday-website/balon_ucapan_kirim.php?slug=" +
      encodeURIComponent(data.slug);
  } catch (err) {
    alert("Error jaringan / server");
    btnBuat.disabled = false;
    btnBuat.innerHTML = oldHtml;
  }
});

function shakeField(id) {
  const el = document.getElementById(id);
  el.style.borderColor = "#F472B6";
  el.style.boxShadow = "0 0 0 3px rgba(244,114,182,0.2)";
  el.animate(
    [
      { transform: "translateX(0)" },
      { transform: "translateX(-6px)" },
      { transform: "translateX(6px)" },
      { transform: "translateX(-4px)" },
      { transform: "translateX(4px)" },
      { transform: "translateX(0)" },
    ],
    { duration: 350, easing: "ease-out" },
  );

  el.addEventListener(
    "input",
    () => {
      el.style.borderColor = "";
      el.style.boxShadow = "";
    },
    { once: true },
  );
}
