const cards = document.querySelectorAll('.card');

const styleEl = document.createElement('style');
styleEl.textContent = `
  @keyframes cardFloat {
    0%   { transform: translateY(0px); }
    50%  { transform: translateY(-10px); }
    100% { transform: translateY(0px); }
  }
`;
document.head.appendChild(styleEl);

cards.forEach((card, i) => {
  const duration = 2.8 + (i * 0.4);
  const delay    = i * 0.3;
  card.style.animation = `cardFloat ${duration}s ease-in-out ${delay}s infinite`;
});