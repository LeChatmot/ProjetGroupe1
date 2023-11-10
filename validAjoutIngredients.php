<?php 

include 'header.php';

if (isset($_GET['name']) AND
    !empty($_GET['name']) AND
    !empty($_GET['nature'])) {

        $data = [
            "name" => $_GET['name'],
            "nature" => $_GET['nature'],
            "saison" => $_GET['saison']
        ];

        array_push($_SESSION['listeIngredients'], $data);

    } else 
        $msgError = "merci de remplir tous les champs"
?>

<h1>Validation du formulaire</h1>
<button onClick="window.location.href='page-ajout-ingredients.php'">Ajouter un nouvel ingredient</button>