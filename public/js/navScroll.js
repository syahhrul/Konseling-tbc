document.addEventListener('DOMContentLoaded', () => {
  const buttons = document.querySelectorAll('.tab-btn');
  const sections = Array.from(buttons).map(btn => document.getElementById(btn.dataset.target));

  function setActiveButton() {
    const scrollPos = window.scrollY + 100; // offset supaya pas header sticky tidak nutup
    let currentIndex = sections.findIndex((section, i) => {
      const top = section.offsetTop;
      const bottom = top + section.offsetHeight;
      return scrollPos >= top && scrollPos < bottom;
    });
    if (currentIndex === -1) currentIndex = 0;

    buttons.forEach(btn => btn.classList.remove('active'));
    buttons[currentIndex].classList.add('active');
  }

  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      const target = document.getElementById(btn.dataset.target);
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  });

  window.addEventListener('scroll', setActiveButton);

  // Set initial active
  setActiveButton();
});
