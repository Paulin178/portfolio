<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../images/fox.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script> 
    <title>Portfolio</title>
    <link rel="stylesheet" href="../dist/style.css">
</head>
<!-- Barre de nav -->
<body>
<div class="flex min-h-screen w-screen flex-col bg-gradient-to-l from-slate-0 to-white-900">
  <header class="relative flex w-screen max-w-screen-xl flex-col overflow-hidden px-4 py-4 text-black md:mx-auto md:flex-row md:items-center">
    <a href="#" class="flex cursor-pointer items-center blackspace-nowrap text-2xl font-black">
      <span class="mr-2 text-4xl text-violet-500">
        <div class="fox">
        <img src="../images/fox.png" alt="">
        </div>
      </span>
      Paulin Chestier
    </a>
    <input type="checkbox" class="peer hidden" id="navbar-open" />
    <label class="absolute top-5 right-7 cursor-pointer md:hidden" for="navbar-open">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </label>
    <nav aria-label="Header Navigation" class="flex max-h-0 w-full flex-col items-center justify-between overflow-hidden transition-all peer-checked:mt-8 peer-checked:max-h-56 md:ml-24 md:max-h-full md:flex-row md:items-start">
      <ul class="flex flex-col items-center space-y-2 md:ml-auto md:flex-row md:space-y-0">
        <li class="font-bold md:mr-12"><a href="../php/accueil.php">Accueil</a></li>
        <li class="md:mr-12"><a href="../php/cv.php">Mon CV</a></li>
        <li class="md:mr-12"><a href="../php/projets.php">Projets</a></li>
        <li class="md:mr-12"><a href="../php/jeux.php">Jeux</a></li>
        <li class="md:mr-12"><a href="../php/livre_or.php">Livre d'Or</a></li>
        <li class="md:mr-12">
        <a href="../php/contact.php"><button class="rounded-full border-2 border-black px-6 py-1 text-black transition-colors hover:bg-violet-500 hover:text-black">Me contacter</button></a> 
        </li>
      </ul>
    </nav>
    
  </header>

<!-- Fin barre de nav -->
  <div class="sm:my-auto mx-auto px-4 py-16 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8 lg:py-20">
    <div class="flex flex-col items-center justify-between lg:flex-row">
      <div class="mb-10 lg:mb-0 lg:max-w-lg lg:pr-5">
        <div class="mb-6 max-w-xl">
          <div>
            <p class="bg-teal-accent-400 mb-2 inline-block rounded-full px-3 text-xs font-semibold uppercase tracking-wider text-black-50">Qui suis-je ?</p>
          </div>
          <h2 class="mb-6 max-w-lg font-sans text-3xl font-bold leading-snug tracking-tight text-black sm:text-5xl sm:leading-snug">
            <p class="animate-text">  
            Paulin Chestier
            </p>
            <p class="animate-text">
            <span class="my-1 inline-block rounded bg-black px-2 text-violet-600">étudiant</span>
            </p>
            <p class="animate-text">
            en cybersécurité
            </p>
          </h2>
          <div class="justify">
          <p class="text-base text-black-200">Je suis étudiant en première année de Bachelor Développeur Informatique Option Cybersécurité. A la suite de mon Bachelor, je souhaite m'orienter vers un Master Of Science Expert en Cybersécurité.
           Ma passion et ma motivation me permettent aujourd'hui de me former pour qu'à l'issue de ma formation je puisse participer à la sécurisation et au déploiement des solutions de securité pour les systèmes d'information.</p>
        </div>
        </div>
        <div class="flex flex-col items-center md:flex-row">
          <a href="../php/contact.php" class="mb-3 inline-flex h-12 w-full items-center justify-center rounded bg-violet-700 px-6 font-medium tracking-wide text-white shadow-md transition duration-200 hover:bg-violet-800 focus:outline-none md:mr-4 md:mb-0 md:w-auto">Me contacter </a>
          <a href="../php/projets.php" aria-label="" class="inline-flex items-center font-semibold text-black-50 underline-offset-2 transition-colors duration-200 hover:underline">Mes projets</a>
        </div>
      </div>
      <div class="relative shadow-xl shadow-violet-700 lg:w-1/2">
        <img class="h-56 w-full rounded object-cover shadow-lg sm:h-96" src="../images/me.png" alt="" />
        <a href="../images/me.png" class="group absolute inset-0 flex h-full w-full items-center justify-center bg-black-900 bg-opacity-30 transition-colors duration-300 hover:bg-opacity-10">
          <div class="flex h-16 w-16 transform items-center justify-center rounded-full bg-black-100 shadow-2xl transition duration-300 group-hover:scale-110">
            <svg class="w-10 text-black-900" fill="currentColor" viewBox="0 0 24 24">
              <path d="M16.53,11.152l-8-5C8.221,5.958,7.833,5.949,7.515,6.125C7.197,6.302,7,6.636,7,7v10 c0,0.364,0.197,0.698,0.515,0.875C7.667,17.958,7.833,18,8,18c0.184,0,0.368-0.051,0.53-0.152l8-5C16.822,12.665,17,12.345,17,12 S16.822,11.335,16.53,11.152z"></path>
            </svg>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="relative mt-20 bg-gray-900 px-4 pt-20">
  <div class="absolute -top-10 left-1/2 h-16 w-16 -translate-x-1/2 rounded-xl border-4 border-purple-500 bg-white p-2"><img class="fox" src="../images/fox.png" alt="" /></div>
  <nav aria-label="Footer Navigation" class="mx-auto mb-10 flex max-w-lg flex-col gap-10 text-center sm:flex-row sm:text-left">
    <a href="../php/contact.php" target="_blank" class="font-medium text-white">Contact</a>
    <a href="https://www.linkedin.com/in/paulin-chestier/" target="_blank" class="font-medium text-white">Linkedin</a>
    <a href="https://github.com/Paulin178" target="_blank" class="font-medium text-white">Github</a>
    <a href="../php/mention.php" target="_blank" class="font-medium text-white">Mentions</a>
    <a href="../php/livre_or.php" target="_blank" class="font-medium text-white">Livre or</a>
  </nav>
  <p class="py-10 text-center text-gray-300">© 2023 Chestier Paulin | All Rights Reserved</p>
</footer>

 <!-- Compiled and minified JavaScript -->
      <!--JavaScript at end of body for optimized loading-->
      <script src="../js/jqueryjsmin.js"></script>
      <script src="../js/materialize.min.js"></script>
      <script src="../js/script.js"></script>

</body>
</html>