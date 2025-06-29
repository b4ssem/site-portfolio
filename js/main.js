document.addEventListener('DOMContentLoaded', () => {
  const reveals = document.querySelectorAll('.reveal1');

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if(entry.isIntersecting) {
        entry.target.classList.add('active');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.8 });

  reveals.forEach(el => observer.observe(el));
});

document.addEventListener('DOMContentLoaded', () => {
  const reveals = document.querySelectorAll('.reveal2');

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if(entry.isIntersecting) {
        entry.target.classList.add('active');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  reveals.forEach(el => observer.observe(el));
});