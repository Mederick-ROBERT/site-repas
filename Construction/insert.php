<?php

// Connexion à MySQL
$connection=mysqli_connect("localhost", "root", "root", "repas");

if (!$connection){ // Contrôler la connexion
    $MessageConnexion = die ("connection impossible");
}
else {
if(isset($_POST['Bouton'])){ // Autre contrôle pour vérifier si la variable $_POST['Bouton'] est bien définie
   $Nom=$_POST['Nom'];
   $Ingredient=$_POST['Ingredient_1'];

   // Requête d'insertion
   $sql="INSERT INTO menus (Nom, Ingredient_1) VALUES ('$Nom', '$Ingredient')";

   // Exécution de la reqête
   mysqli_query($connection, $sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($connection));
}
}

sleep(2);
header("Location: formulaire.php" );

?>



