<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire'</title>
</head>
<body>
    
</body>
</html>
<?php
require_once "config.php";
 
//On écrit la requête sans entrer les valeurs directement dans la variable
//Dans le but de se protéger des injections SQL
$sql = "INSERT INTO form(name,firstname,pseudo,email,password) VALUES(:name,:firstname,:pseudo,:email,:password)";
//On prépare la requête
$pre = $pdo->prepare($sql);
//On va bind les valeurs avec la fonction bindParam
$pre->bindParam("name", $_POST['name']);
$pre->bindParam("firstname", $_POST['firstname']);
$pre->bindParam("pseudo", $_POST['pseudo']);
$pre->bindParam("email", $_POST['email']);
$pre->bindParam("password", $_POST['password']);
//On execute la requête
$pre->execute();

  header('Location: ../php/connexion.php');
  exit();
?>

 

