<nav class="fixed top-0 left-0 right-0 z-50 bg-white">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 flex items-center justify-between h-16">
    <div>
      <a href="#" class="h-auto flex items-center">
        <img src="images/logo-b4ssem.png" alt="logo B4ssem" class="max-h-14 sm:max-h-12">
      </a>
    </div>
    <button id="burger-btn" class="sm:hidden cursor-pointer z-50" aria-label="Toggle menu">
      <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <ul id="menu" class="hidden sm:flex flex-col sm:flex-row gap-4 sm:gap-6 absolute sm:static top-full left-0 w-full sm:w-auto bg-white sm:bg-transparent p-4 sm:p-0 shadow sm:shadow-none z-40">
      <li><a href="#" class="block text-base font-semibold text-gray-700 hover:text-blue-600">Accueil</a></li>
      <li><a href="#experiences" class="block text-base font-semibold text-gray-700 hover:text-blue-600">Expériences</a></li>
      <li><a href="#parcours" class="block text-base font-semibold text-gray-700 hover:text-blue-600">Parcours</a></li>
      <li><a href="#posts" class="block text-base font-semibold text-gray-700 hover:text-blue-600">Articles</a></li>
    </ul>
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





