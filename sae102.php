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

<title>SAÉ 102 – Stratégie marketing</title>
</head>

<body class="flex flex-col min-h-screen bg-gray-50">
  <?php require_once('navbar2.php'); ?>

  <main class="flex-grow w-full max-w-5xl mx-auto px-4 pt-28 pb-16">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">SAÉ 102 – Stratégie marketing</h1>
    <p class="text-lg text-gray-700 mb-8">
      Audit marketing et digital du site Marionnaud : analyse de la page d’accueil et d’une page produit pour comprendre 
      la stratégie de communication et l’expérience utilisateur.
    </p>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold text-gray-800 mb-3">Bilan personnel</h2>
      <p class="text-gray-700 mb-3">
        J’ai appris à analyser les choix visuels et ergonomiques d’une marque, ainsi que sa stratégie marketing et digitale. 
        Ce projet m’a permis d’approfondir ma compréhension des enjeux économiques et concurrentiels du secteur.
      </p>
      
    </section>

    <section>
      <h2 class="text-2xl font-semibold text-gray-800 mb-3">Réalisations</h2>
      <ul class="list-disc pl-5 text-gray-700 space-y-2">
        <li><a href="https://docs.google.com/document/d/1olHGn_G8ObTx3k3Gpqw4U8pcM3AYQec9WgV2fjKMHuU/edit?usp=sharing" target="_blank" class="text-blue-600 hover:underline">Audit Marionnaud</a></li>
      </ul>
    </section>
  </main>

  <footer class="mt-auto py-4 text-center text-sm text-gray-500">
    <p class="font-medium text-black">© 2025 par <span class="font-bold text-black">Bassem MEGHICHE</span></p>
  </footer>
</body>
</html>