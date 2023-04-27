<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../images/fox.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script> 
    <title>Inscription</title>
    <link rel="stylesheet" href="../dist/style.css">
    <link rel="stylesheet" href="../css/inscription.css">
</head>
      <body>
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

<div class="form-box">
<form method="post" class="form" action="signup.php">
    <span class="title">Connexion</span>
    <span class="subtitle">Connecter vous à votre compte</span>
    <div class="form-container">  
                <p>Pseudo:</p><input type ="text" class="input" name="pseudo"placeholder="pseudo"><br>
                <p>Mot de passe:</p><input type ="text" class="input" name="password"placeholder="password"><br><br>
                <button>Envoyer</button><br><br>
</div>
</form>
<div class="form-section">
  <p>Vous n'avez pas de compte ?<a href="../php/inscription.php">S'inscrire</a></p>
</div>
</div>
</body>

