<!doctype html>
<html lang="fr">
<head>

    <link rel="icon" type="image/x-icon" href="/images/logo.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .reveal1 {
          opacity: 0;
          transform: translateX(-30px);
          transition: opacity 1s ease-out, transform 1s ease-out;
        }
        
          opacity: 1;
          transform: translateX(0);
  }

  .reveal2 {
          opacity: 0;
          transform: translateY(-30px);
          transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .reveal2.active {
          opacity: 1;
          transform: translateY(0);
  }
      </style>

<title>SAÉ 203 – Site dynamique</title>
</head>

<body class="flex flex-col min-h-screen bg-gray-50">
  <?php require_once('navbar2.php'); ?>

  <main class="flex-grow w-full max-w-5xl mx-auto px-4 pt-28 pb-16">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">SAÉ 203 – Site dynamique</h1>
    <p class="text-lg text-gray-700 mb-8">
      Développement d’un site dynamique connecté à une base de données relationnelle. 
      Gestion des utilisateurs, affichage et manipulation des données, mise en ligne sur un serveur distant.
    </p>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold text-gray-800 mb-3">Bilan personnel</h2>
      <p class="text-gray-700 mb-3">
        J’ai appris à développer et intégrer des pages web fluides et accessibles en utilisant les langages HTML et CSS pour structurer et styliser les contenus,
        en veillant à la lisibilité, à la compatibilité multi-supports et au respect des bonnes pratiques d’accessibilité. J’ai également mis en place des interactions
        simples grâce au PHP, permettant de rendre les pages dynamiques et de gérer l’échange de données avec une base. L’utilisation de SQL et de MySQL m’a permis de concevoir
        et manipuler des bases de données, notamment pour stocker et afficher des informations de manière sécurisée et efficace. Enfin, j’ai travaillé sur l’hébergement et la mise
        en ligne, en configurant l’environnement serveur et en assurant la mise en production des fichiers, ce qui m’a donné une compréhension complète du processus allant du
        développement à la diffusion d’un site fonctionnel.
      </p>
      
      
    </section>
    <section>
      <h2 class="text-2xl font-semibold text-gray-800 mb-3">Réalisations</h2>
      <ul class="list-disc pl-5 text-gray-700 space-y-2">
        <li><a href="https://phpsae203.alwaysdata.net/site-sae-203/code/index.php" target="_blank" class="text-blue-600 hover:underline">Lien du site</a></li>
        
    </section>
  </main>

  <footer class="mt-auto py-4 text-center text-sm text-gray-500">
    <p class="font-medium text-black">© 2025 par <span class="font-bold text-black">Bassem MEGHICHE</span></p>
  </footer>
</body>
</html>