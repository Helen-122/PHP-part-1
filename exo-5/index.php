<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice5</title>
</head>
<body>
<h2>Créez une variable âge et une variable genre. Afficher aléatoirement vous êtes une femme et vous avez xans ou vous êtes un homme et vous avez xans.</h2><br>
<?php

$age = rand(00,120);
$sexe = array('homme','femme');
$genre = $sexe[rand(0,1)];
$result = $age.''. $genre;
echo $result;

if($age >0 && ($genre == 'femme' || $genre == 'homme')){
    if ($age >= 18 && $genre == 'femme'){
    echo 'Vous êtes une femme et vous êtes majeure';
    }elseif ($age <= 18 && $genre == 'femme'){
        echo 'Vous êtes une femme et vous etes mineure';
    }elseif ($age >= 18 && $genre == 'homme'){
    echo 'Vous êtes un homme et vous êtes majeur';
    }elseif ($age <= 18 && $genre == 'homme'){
    echo 'Vous êtes un homme et vous êtes mineur';
    
}else
    echo 'veuillez entrer des inforations valides';
}

?>
</body>
</html>





