<!doctype html>
<html lang="fr">

<head>
    <link rel="icon" type="image/x-icon" href="/images/logo.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @layer utilities {
          .fade-in {
            animation: fadeIn 0.8s ease-out forwards;
          }
    
          @keyframes fadeIn {
            from {
              opacity: 0;
              transform: translateY(30px);
            }
            to {
              opacity: 1;
              transform: translateY(0);
            }
          }
        }

        .reveal {
          opacity: 0;
          transform: translateY(30px);
          transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .reveal.active {
          opacity: 1;
          transform: translateY(0);
  }
      </style>

<title>Bassem Meghiche</title>
</head>

<body class="flex flex-col min-h-screen ">
  <?php require_once('navbar.php'); ?>



  <main>
    <section id="home" class=" reveal w-full max-w-5xl mx-auto px-4 pt-24 pb-12 md:pt-72 md:pb-72 grid grid-cols-1 md:grid-cols-2 items-center gap-10">

      <div class="space-y-10 text-left">
        <div>
          <h1 class="text-4xl sm:text-2xl font-bold mb-3">BASSEM MEGHICHE</h1>
          <h2 class="text-xl sm:text-base text-gray-700">
            Étudiant en première année de BUT MMI<br>
            à l’IUT de Cergy Pontoise - Antenne de Sarcelles
          </h2>
        </div>

        <div>
          <a target="_blank" href="pdf/Bassem MEGHICHE.pdf"
             class="px-7 py-4 bg-black text-white font-semibold text-xl sm:text-base shadow-md rounded transition-all duration-200 hover:bg-gray-700 hover:shadow-[0_15px_20px_rgba(59,130,246,0.2)]">
            Télécharger mon CV
          </a>
        </div>
    
        <div class="flex md:pt-12 gap-2">
          <a href="mailto:bmeghiche06@gmail.com" class="flex items-center gap-2">
            <img src="https://cdn4.iconfinder.com/data/icons/social-media-logos-6/512/112-gmail_email_mail-512.png" alt="Gmail" class="w-6 h-6 sm:w-5 sm:h-5">
          </a>
          <a target="_blank" href="https://www.linkedin.com/in/b4ssem/" class="flex items-center gap-2">
            <img src="images/linkedin.png" alt="LinkedIn" class="w-6 h-6 sm:w-5 sm:h-5">
          </a>
          <a target="_blank" href="https://github.com/b4ssem?tab=repositories" class="flex items-center gap-2">
            <img src="images/github.png" alt="GitHub" class="w-6 h-6 sm:w-5 sm:h-5">
          </a>
        </div>
      </div>

      <div class="flex justify-center md:justify-end">
        <img src="images/illustration.png" alt="Illustration"
             class="w-[300px] sm:w-[250px] md:w-[320px] rounded-full object-cover">
      </div>
    </section>

    <section id="experiences" class="reveal w-full max-w-5xl mx-auto px-4 pt-24 grid items-center gap-10">
      <?php require_once('experiences.php'); ?>
    </section>

    <section id="parcours" class="reveal w-full max-w-5xl mx-auto px-4 pt-24 grid items-center gap-10">
      <?php require_once('parcours.php'); ?>
    </section>

    <section id="projets" class="reveal w-full max-w-5xl mx-auto px-4 pt-24 grid items-center">
      <?php require_once('projets.php'); ?>
    </section>

  </main>
</body>

  <footer class="mt-auto py-4 text-center text-sm text-gray-500">
    <p>© 2025 par <span class="font-semibold text-gray-700">Bassem MEGHICHE</span></p>
  </footer>


<script src="js/main.js"></script>
