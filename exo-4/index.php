<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice4</title>
</head>
<body>
<h2>Créez une variable age aléatoire. Afficher vous êtes majeur ou vous êtes mineur en fonction de l'âge obtenu.</h2><br>
<?php

$age=rand(00,120);
echo $age;
if($age <=17){
    echo 'Vous êtes mineur';
}else{
    echo 'Vous êtes majeur';
}

?>
</body>
</html>





