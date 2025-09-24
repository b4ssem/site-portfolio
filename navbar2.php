<nav class="fixed top-0 left-0 right-0 z-50 bg-white">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 flex items-center justify-between h-16">
    <div>
      <a href="index" class="text-base font-semibold text-black">B4ssem</a>
    </div>

    <button id="burger-btn" class="sm:hidden cursor-pointer z-50" aria-label="Toggle menu">
      <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>
</nav>

<script>
  const burgerBtn = document.getElementById('burger-btn');
  const menu = document.getElementById('menu');

  burgerBtn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });

  menu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      if(window.innerWidth < 640) {
        menu.classList.add('hidden');
      }
    });
  });
</script>





