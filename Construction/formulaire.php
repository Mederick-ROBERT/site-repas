<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Titre en attente...</title>
        <link rel="stylesheet" href="formulaire.css">

</head>
<body>
<div class="container">
<div class="header"></div>   
<?php 
    include "../menu-déroulant/entete.html";
?>
<div class="main"></div>

<form action="insert.php" method="post">
<br>
<p>Nom:</p> <input type="text" name="Nom" class="barre" />
<p>Ingredient:</p> <input type="text" name="Ingredient_1" required size="45" class="barre" />  &ensp; <input type="text" name="Ingredient_2" required size="45" class="barre" />  &ensp; <input type="text" name="Ingredient_3" required size="45" class="barre" />  &ensp; <input type="text" name="Ingredient_4" required size="45" class="barre" />  &ensp;<input type="text" name="Ingredient_5" required size="45" class="barre" />  &ensp; <!--<button class="link">add</button>-->
<br>
<p>Url:<p> <input type="text" name="URL" required size="45" class="barre" /> 
<br>
<input type="submit" name="Bouton" class="bouton" >

</form>


<div class="footer"></div>
</div>
</body>
</html>



