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

<title>SAÉ 104 – Production audiovisuelle</title>
</head>

<body class="flex flex-col min-h-screen bg-gray-50">
  <?php require_once('navbar2.php'); ?>

  <main class="flex-grow w-full max-w-5xl mx-auto px-4 pt-28 pb-16">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">SAÉ 104 – Production audiovisuelle</h1>
    <p class="text-lg text-gray-700 mb-8">
      Réalisation d’un tutoriel vidéo sur les réglages de l’exposition et le triangle d’exposition. 
      Projet conçu pour TikTok, avec scénario, tournage, montage et sous-titres en anglais.
    </p>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold text-gray-800 mb-3">Bilan personnel</h2>
      <p class="text-gray-700 mb-3">
        J’ai appris à écrire un script en structurant un message clair et adapté à la cible, puis à organiser le tournage en prenant en
        compte la configuration de la caméra, le cadrage, la lumière et la captation sonore afin de garantir une qualité visuelle et auditive optimale.
        J’ai ensuite monté la vidéo avec DaVinci Resolve, en travaillant sur le rythme, la fluidité des transitions et l’équilibre entre image et son pour renforcer
        l’impact narratif. Enfin, j’ai optimisé les médias pour les réseaux sociaux en adaptant les formats, la durée et les sous-titres afin de maximiser l’accessibilité
        et l’engagement du public. Ce projet m’a ainsi permis d’acquérir une vision complète de la production audiovisuelle, de la préparation à la diffusion.
      </p>
      
    </section>
  </main>

  <footer class="mt-auto py-4 text-center text-sm text-gray-500">
    <p class="font-medium text-black">© 2025 par <span class="font-bold text-black">Bassem MEGHICHE</span></p>
  </footer>
</body>
</html>