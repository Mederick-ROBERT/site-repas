<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Titre en attente...</title>
        <link rel="stylesheet" href="formulaire.css" media="screen">
<script>
  function init(){
    var button = document.getElementById("button")
  
    button.onclick = () => {
  window.open('http://localhost/site-repa/Construction/ingr%C3%A9dient.php', 'ingredient', 'width=600,height=300,left=100,top=100,width=600,height=300,left=100,top=100');
}
}

</script>

</head>
<body onload="init();">
<div class="container">
<div class="header"> 
<?php 
    include "../menu-déroulant/entete.html";
?>
</div>  
<div class="main"></div>

<form action="insert.php" method="post">
<br>
<p>Nom:</p> <br> <input type="text" name="Nom" class="barre" />

<p>Ingredient: 

<!-- ************************************** Choix nombre ingrédient(s) ****************************************** -->
<!-- fenetre pop-up -->
<button id="button">cliquez</button>


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



