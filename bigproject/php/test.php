<?php
// Connexion à la base de données
$host = "localhost";
$user = "root";
$password = "root";
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