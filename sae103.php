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

<title>SAÉ 103 – Conception graphique</title>
</head>

<body class="flex flex-col min-h-screen bg-gray-50">
  <?php require_once('navbar2.php'); ?>

  <main class="flex-grow w-full max-w-5xl mx-auto px-4 pt-28 pb-16">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">SAÉ 103 – Conception graphique</h1>
    <p class="text-lg text-gray-700 mb-8">
      Création du programme du festival “Formule Bédé 10” (42 pages). Projet axé sur la conception graphique, la mise en page 
      et l’optimisation des supports de diffusion imprimés.
    </p>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold text-gray-800 mb-3">Bilan personnel</h2>
      <p class="text-gray-700 mb-3">
        J’ai appris à produire des pistes graphiques en explorant différentes directions créatives, à retoucher des visuels et à optimiser des supports en tenant
        compte des contraintes techniques liées à l’impression. L’utilisation d’InDesign m’a permis de concevoir des maquettes structurées et lisibles,
        d’élaborer un chemin de fer afin d’organiser efficacement le contenu et d’assurer la fluidité de lecture, ainsi que de créer des gabarits garantissant
        la cohérence visuelle et l’homogénéité graphique des documents. Ce projet m’a ainsi permis de consolider ma maîtrise des logiciels de création graphique
        tout en développant une véritable méthodologie professionnelle de conception éditoriale, de l’expérimentation visuelle jusqu’à la préparation des fichiers pour l’impression.
      </p>
      
    </section>
  </main>

  <footer class="mt-auto py-4 text-center text-sm text-gray-500">
    <p class="font-medium text-black">© 2025 par <span class="font-bold text-black">Bassem MEGHICHE</span></p>
  </footer>
</body>
</html>