// reveal.js - robust reveal with IntersectionObserver + scroll fallback + debug
(function () {
  const DEBUG = false; // passe à true pour logs détaillés

  function debugLog(...args) { if (DEBUG) console.log(...args); }

  function createObserver() {
    const items = Array.from(document.querySelectorAll('.reveal1, .reveal2'));
    debugLog('reveal items found:', items.length);
    if (!items.length) return;

    // options: rootMargin with negative bottom so it triggers earlier on short screens
    const options = {
      root: null,
      rootMargin: '0px 0px -20% 0px',
      threshold: 0.05
    };

    if ('IntersectionObserver' in window) {
      const io = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('active');
            debugLog('revealed via IO:', entry.target);
            obs.unobserve(entry.target);
          }
        });
      }, options);

      items.forEach(el => {
        // if already active skip
        if (!el.classList.contains('active')) io.observe(el);
        debugLog('observing', el);
      });

      // also re-check after window load (images might have changed layout)
      window.addEventListener('load', () => {
        debugLog('window load -> re-checking non-active items');
        document.querySelectorAll('.reveal1, .reveal2').forEach(el => {
          if (!el.classList.contains('active')) io.observe(el);
        });
      });

    } else {
      // Fallback: scroll listener
      debugLog('IntersectionObserver not supported → using scroll fallback');
      const onScroll = () => {
        const wh = window.innerHeight;
        document.querySelectorAll('.reveal1, .reveal2').forEach(el => {
          if (el.classList.contains('active')) return;
          const top = el.getBoundingClientRect().top;
          if (top < wh - 50) {
            el.classList.add('active');
            debugLog('revealed via scroll fallback:', el);
          }
        });
      };
      window.addEventListener('scroll', onScroll, { passive: true });
      window.addEventListener('resize', onScroll);
      window.addEventListener('load', onScroll);
      onScroll();
    }

    // safety: after 2.5s, force-reveal any element still hidden (useful for weird layouts)
    setTimeout(() => {
      document.querySelectorAll('.reveal1, .reveal2').forEach(el => {
        if (!el.classList.contains('active')) {
          el.classList.add('active');
          debugLog('force-revealed by timeout:', el);
        }
      });
    }, 2500);
  }

  // init
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', createObserver);
  } else {
    createObserver();
  }
})();