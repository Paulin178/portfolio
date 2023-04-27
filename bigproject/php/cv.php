<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../images/fox.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script> 
    <title>Projet 1</title>
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
      <section class="mx-auto my-10 flex max-w-xl flex-col rounded-3xl border p-4 sm:px-16 sm:py-16 lg:max-w-screen-lg lg:flex-row">
  <div class="lg:w-1/2 lg:pr-8">
    <div class="">
    <a href="http://localhost/bigproject/images/cv.pdf" download="cv.pdf" target="_blank">
    <button class="cta">
    <span class="span">Télécharger mon CV</span>
    </a>
    <span class="second">
      <svg width="50px" height="20px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
        </g>
      </svg>
    </span> 
</button>
</div>
<br><br>
    <div class="mt-4">
      <h2 class="text-3xl font-medium text-gray-700">Etudiant à Guardia</h2>
      <p class="mt-6 text-gray-600">
      Passionné de 𝘾𝙮𝙗𝙚𝙧𝙨𝙚𝙘𝙪𝙧𝙞𝙩𝙚, intégrer l'école de Guardia Cybersecurity School était pour moi essentiel pour prétendre travailler dans ce domaine. <br><br>
      La pédagogie par projet dispensée à Guardia est pour moi la plus efficace et la plus adaptée pour répondre aux besoins des entreprises. <br><br>
      Étant déjà habitué à la création et à l'étude de projet au cours de mes deux années en STI2D, cette approche de travail est celle qui me correspond le mieux.
    </div>
  </div>
  <div class="-order-1 mb-8 lg:order-1 lg:mb-0 lg:w-1/2">
    <img class="border-blue-600/10 rounded-3xl border shadow-md" src="../images/cv.jpg" alt="" />
  </div>
</section>

<!-- Footer -->
<footer class="relative mt-20 bg-gray-900 px-4 pt-20">
  <div class="absolute -top-10 left-1/2 h-16 w-16 -translate-x-1/2 rounded-xl border-4 border-purple-500 bg-white p-2"><img class="fox" src="../images/fox.png" alt="" /></div>
  <nav aria-label="Footer Navigation" class="mx-auto mb-10 flex max-w-lg flex-col gap-10 text-center sm:flex-row sm:text-left">
    <a href="../php/contact.php" target="_blank" class="font-medium text-white">Contact</a>
    <a href="https://www.linkedin.com/in/paulin-chestier/" target="_blank" class="font-medium text-white">Linkedin</a>
    <a href="https://github.com/Paulin178" target="_blank" class="font-medium text-white">Github</a>
    <a href="https://guardia.school/" target="_blank" class="font-medium text-white">Guardia Cybersecurity School</a>
  </nav>
  <p class="py-10 text-center text-gray-300">© 2023 Chestier Paulin | All Rights Reserved</p>
</footer>
          <script src="../js/jqueryjsmin.js"></script>
          <script src="../js/script.js"></script>
      </body>
  </html>