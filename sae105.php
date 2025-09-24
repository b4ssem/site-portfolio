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

<title>SAÉ 105 – Développement Web</title>
</head>

<body class="flex flex-col min-h-screen bg-gray-50">
  <?php require_once('navbar2.php'); ?>

  <main class="flex-grow w-full max-w-5xl mx-auto px-4 pt-28 pb-16">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">SAÉ 105 – Développement Web</h1>
    <p class="text-lg text-gray-700 mb-8">
      Création d’un site vitrine pour le BUT MMI à partir d’une maquette Adobe XD. 
      Développement en HTML, CSS et PHP, avec mise en ligne sur un hébergement standard.
    </p>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold text-gray-800 mb-3">Bilan personnel</h2>
      <p class="text-gray-700 mb-3">
        J’ai appris à développer et intégrer des pages web fluides et accessibles en utilisant HTML pour structurer le contenu et assurer une sémantique claire,
        et CSS, en respectant les principes d’ergonomie et d’accessibilité. J’ai également
        utilisé PHP pour créer des interactions simples côté serveur, comme la gestion de formulaires ou l’affichage dynamique de contenus, ce qui m’a permis de rendre
        les pages plus interactives et adaptées aux besoins des utilisateurs. Enfin, j’ai travaillé sur l’hébergement et la mise en ligne en configurant les fichiers et
        l’environnement nécessaire au bon fonctionnement du site, ce qui m’a donné une vision complète du processus, de la création jusqu’à la mise en production.
      </p>
      
    </section>

    <section>
      <h2 class="text-2xl font-semibold text-gray-800 mb-3">Réalisations</h2>
      <ul class="list-disc pl-5 text-gray-700 space-y-2">
        <li><a href="https://meghiche.alwaysdata.net/site-BUT-MMI/code/index.php" target="_blank" class="text-blue-600 hover:underline">Lien du site</a></li>
        
    </section>
  </main>

  <footer class="mt-auto py-4 text-center text-sm text-gray-500">
    <p class="font-medium text-black">© 2025 par <span class="font-bold text-black">Bassem MEGHICHE</span></p>
  </footer>
</body>
</html>