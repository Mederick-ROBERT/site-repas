<?php

// Connexion à MySQL
$connection=mysqli_connect("localhost", "root", "root", "repas");

if (!$connection){ // Contrôler la connexion
    $MessageConnexion = die ("connection impossible");
}
else {
if(isset($_POST['Bouton'])){ // Autre contrôle pour vérifier si la variable $_POST['Bouton'] est bien définie
   $Nom=$_POST['Nom'];
   $Ingredient_1=$_POST['Ingredient_1'];
   $Ingredient_2=$_POST['Ingredient_2'];
   $Ingredient_3=$_POST['Ingredient_3'];
   $Ingredient_4=$_POST['Ingredient_4'];
   $Ingredient_5=$_POST['Ingredient_5'];

   // Requête d'insertion
   $sql="INSERT INTO menus (Nom, Ingredient_1, Ingredient_2, Ingredient_3, Ingredient_4, Ingredient_5) VALUES ('$Nom', '$Ingredient_1', '$Ingredient_2', '$Ingredient_3', '$Ingredient_4', '$Ingredient_5')";

   // Exécution de la reqête
   mysqli_query($connection, $sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($connection));
}
}

sleep(2);
header("Location: formulaire.php" );

?>



