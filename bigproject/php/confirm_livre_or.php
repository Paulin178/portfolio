<?php
#signup.php
require_once "config.php";
 
//On écrit la requête sans entrer les valeurs directement dans la variable
//Dans le but de se protéger des injections SQL

if (isset($_POST['pseudo'], $_POST['object'], $_POST['message'])) {

    // Vérifie si les champs ne sont pas vides
    if (!empty($_POST['pseudo']) && !empty($_POST['object']) && !empty($_POST['message'])) {

        //On écrit la requête sans entrer les valeurs directement dans la variable
        //Dans le but de se protéger des injections SQL
        $sql = "INSERT INTO livre_or (pseudo,object,message) VALUES(:pseudo,:object,:message)";
        //On prépare la requête
        $pre = $pdo->prepare($sql);

        //On va bind les valeurs avec la fonction bindParam
        $pre->bindParam("pseudo", $_POST['pseudo']);
        $pre->bindParam("object", $_POST['object']);
        $pre->bindParam("message", $_POST['message']);

        //On execute la requête
        $pre->execute();
        header('Location:livre_or.php'); // On redirige
    }}
?>
