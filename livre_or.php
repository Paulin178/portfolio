<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../images/fox.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script> 
    <title>Livre d'or</title>
    <link rel="stylesheet" href="../dist/style.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/livre_or.css">
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
<?php
// Connexion à la base de données
$host = "localhost";
$user = "root";
$password = "";
$dbname = "big_project";

$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
    die("Connexion échouée: " . mysqli_connect_error());
}

// Récupération des messages et pseudos de la base de données
$sql = "SELECT pseudo, object, message FROM livre_or ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<div class="card">
  <span class="title">Livre d'or</span>
  <form class="form" method="post" action="confirm_livre_or.php">
    <div class="group">
      <input name="pseudo" type="text" class="field" placeholder="Votre pseudo">
    </div>
    <div class="group">
      <input name="object" type="text" class="field" placeholder="Objet">
    </div>
    <div class="group">
      <textarea placeholder="Message" name="message" type="text" class="field"></textarea>
    </div>
    <button type="submit">Envoyer</button>
  </form>
</div>

<?php
// Affichage des messages et pseudos dans des cartes
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Génération du code HTML pour chaque message
        echo '<div class="card">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . htmlspecialchars($row['object']) . '</h5>';
        echo '<h6 class="card-subtitle mb-2 text-muted">De : ' . htmlspecialchars($row['pseudo']) . '</h6>';
        echo '<p class="card-text">' . htmlspecialchars($row['message']) . '</p>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "Aucun message trouvé.";
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>


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

</body>
</html>