<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Titre en attente...</title>
        <link rel="stylesheet" href="formulaire.css" media="screen">

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
<p>Nom:</p> <br> <input type="text" name="Nom" class="barre" />

<p>Ingredient: 

<!-- ************************************** Choix nombre ingrédient(s) ****************************************** -->
    
<form action="" method="post">
     <select name="Nbr" id="Nbr">
           <option value="Nbr_1">1</option>
           <option value="Nbr_2">2</option>
           <option value="Nbr_3">3</option>
           <option value="Nbr_4">4</option>
           <option value="Nbr_5">5</option>
    </select>
<br> 
<script>
    document.getElementById(Nbr).value
    
</script>

<!-- ************************************** /Choix nombre ingrédient(s)/ ****************************************** -->
<br>
<p>Url:<p> <br> <input type="text" name="URL" required size="45" class="barre" /> 
<br>
<input type="submit" name="Bouton" class="bouton" >

</form>


<div class="footer"></div>
</div>
</body>
</html>



