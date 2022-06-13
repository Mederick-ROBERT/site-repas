<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Titre en attente...</title>
        <link rel="stylesheet" href="liste.css">
        <?php require "../Base-de-donnée/connect.php"; ?>
<body>
<?php include "../menu-déroulant/entete.html"; 
echo "<br>";
try
{
$pdo = new PDO($attr, $user, $pass, $opts);
}
catch (PDOException $e)
{
        throw new PDOException($e->getMessage(), (int)$e->getCode());
}

$query = "SELECT * FROM menus";
$result = $pdo->query($query);

while ($row = $result->fetch())
{
    echo 'Nom: ' .htmlspecialchars($row['Nom']) . "<br>"; 
    echo 'Ingredient: ' .htmlspecialchars($row['Ingredient_1']) . "<br>"; 
    echo '&ensp;          ' .htmlspecialchars($row['Ingredient_2']) . "<br>";
    echo '&ensp;          ' .htmlspecialchars($row['Ingredient_3']) . "<br>";
    echo '&ensp;          ' .htmlspecialchars($row['Ingredient_4']) . "<br>";
    echo '&ensp;          ' .htmlspecialchars($row['Ingredient_5']) . "<br>";
    echo 'Url: ' .htmlspecialchars($row['URL']) . "<br>";
    echo "<br>";
}
?>

</body>
</head>
</html>