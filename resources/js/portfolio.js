document.addEventListener('DOMContentLoaded', () => {
  const yearEl = document.getElementById('year');
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  const htmlEl = document.documentElement;
  const toggleBtn = document.getElementById('themeToggle');
  const themeIcon = document.getElementById('themeIcon');

  function applyTheme(theme) {
    htmlEl.dataset.theme = theme;
    if (themeIcon) themeIcon.className = theme === 'dark' ? 'fa-solid fa-sun' : 'fa-solid fa-moon';
    if (toggleBtn) toggleBtn.title = theme === 'dark' ? 'Switch to Light Mode' : 'Switch to Dark Mode';
  }

  const saved = localStorage.getItem('portfolio-theme') || 'dark';
  applyTheme(saved);

  if (toggleBtn) {
    toggleBtn.addEventListener('click', () => {
      const next = htmlEl.dataset.theme === 'dark' ? 'light' : 'dark';
      applyTheme(next);
      localStorage.setItem('portfolio-theme', next);
    });
  }

  const navbar = document.getElementById('navbar');
  if (navbar) {
    window.addEventListener('scroll', () => {
      navbar.classList.toggle('navbar-scrolled', window.scrollY > 40);
    }, { passive: true });
  }

  const hamburger = document.getElementById('hamburger');
  const navMobile = document.getElementById('navMobile');

  window.closeMobileNav = function closeMobileNav() {
    if (!hamburger || !navMobile) return;
    hamburger.classList.remove('hamburger-open');
    navMobile.classList.add('hidden');
    navMobile.classList.remove('flex');
  };

  if (hamburger && navMobile) {
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('hamburger-open');
      navMobile.classList.toggle('hidden');
      navMobile.classList.toggle('flex');
    });
  }

  const phrases = [
    'BSIT Student @ Gordon College',
    'Full-Stack Web Developer',
    'Laravel & Angular Enthusiast',
    'Building for the Real World',
  ];
  let pIdx = 0;
  let cIdx = 0;
  let deleting = false;
  const typingEl = document.getElementById('typingText');

  function type() {
    if (!typingEl) return;
    const phrase = phrases[pIdx];
    if (!deleting) {
      typingEl.textContent = phrase.slice(0, ++cIdx);
      if (cIdx === phrase.length) {
        deleting = true;
        setTimeout(type, 1600);
        return;
      }
    } else {
      typingEl.textContent = phrase.slice(0, --cIdx);
      if (cIdx === 0) {
        deleting = false;
        pIdx = (pIdx + 1) % phrases.length;
      }
    }
    setTimeout(type, deleting ? 45 : 75);
  }
  setTimeout(type, 800);

  const fadeEls = document.querySelectorAll('.fade-up');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        entry.target.querySelectorAll('.progress-fill[data-width]').forEach((bar) => {
          bar.style.width = `${bar.dataset.width}%`;
        });
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
  fadeEls.forEach((el) => observer.observe(el));

  const skillObs = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.querySelectorAll('.progress-fill[data-width]').forEach((bar) => {
          bar.style.width = `${bar.dataset.width}%`;
        });
        skillObs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });
  document.querySelectorAll('.skill-card').forEach((c) => skillObs.observe(c));

  window.handleFormSubmit = function handleFormSubmit() {
    const name = document.getElementById('fname')?.value.trim();
    const email = document.getElementById('femail')?.value.trim();
    const message = document.getElementById('fmessage')?.value.trim();
    if (!name || !email || !message) {
      alert('Please fill in Name, Email, and Message before sending.');
      return;
    }
    const formFields = document.getElementById('formFields');
    const success = document.getElementById('formSuccess');
    if (formFields) formFields.style.display = 'none';
    if (success) success.style.display = 'block';
  };
});
