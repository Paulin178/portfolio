<?php
#signup.php
require_once "config.php";
 
//On écrit la requête sans entrer les valeurs directement dans la variable
//Dans le but de se protéger des injections SQL

if (isset($_POST['email'], $_POST['pseudo'], $_POST['message'])) {

    // Vérifie si les champs ne sont pas vides
    if (!empty($_POST['email']) && !empty($_POST['pseudo']) && !empty($_POST['message'])) {

        //On écrit la requête sans entrer les valeurs directement dans la variable
        //Dans le but de se protéger des injections SQL
        $sql = "INSERT INTO contact (email,pseudo,message) VALUES(:email,:pseudo,:message)";
        //On prépare la requête
        $pre = $pdo->prepare($sql);

        //On va bind les valeurs avec la fonction bindParam
        $pre->bindParam("email", $_POST['email']);
        $pre->bindParam("pseudo", $_POST['pseudo']);
        $pre->bindParam("message", $_POST['message']);

        //On execute la requête
        $pre->execute();

        echo "message envoyé";
        header('Location:accueil.php'); // On redirige
        exit;
    } else {
        echo "Veuillez remplir tous les champs";
        exit;
    }
} else {
    echo "Une erreur s'est produite, veuillez réessayer";
    exit;
}
?>