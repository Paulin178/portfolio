<!--Afficher les utilisateurs-->
<?php require_once "config.php"; ?>
   <h1>Liste des utilisateurs</h1>
   <?php
   $sql = "SELECT * FROM user";
   $pre = $pdo->prepare($sql);
   $pre->execute();
   $data = $pre->fetchAll(PDO::FETCH_ASSOC);
   
   foreach($data as $user){ ?>
   <div class="user">
     <h3><?php echo $user['name']." ".$user['firstname'] ?></h3>
     <span class="email"><?php echo $user['email'] ?></span>
     <input type='submit' value='Modifier' />
    <input type='submit' value='Supprimer' />
   </div>
   <?php } ?>