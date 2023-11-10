<?php
$_SESSION ['recettes'] = [
        [
            'nom' => 'test',
	        'tempsDePreparation' => 10,
	        'tempsDeCuisson' => 15,
	        'niveauDeDifficulté' => 'Accessible',
	        'nombreDePersonnes' => 4,
	        'ingredients' => ['id'],
            'quantitéUnité' => 5,
            'quantitéPoids' => 400,
        ],
    [
        'nom' => 'test',
        'tempsDePreparation' => 10,
        'tempsDeCuisson' => 15,
        'niveauDeDifficulté' => 'Accessible',
        'nombreDePersonnes' => 4,
        'ingredients' => ['id'],
        'quantitéUnité' => 5,
        'quantitéPoids' => 400,
    ],
];
?>

<h1>Page recette</h1>
<div  style=" display: flex; flex-wrap: wrap" >
    <?php foreach ($_SESSION ['recettes'] as $key => $value) {
        echo "    
            <div class='card d-flex flex-row' style='margin: 10px'>
                <div class='card-body'>
                    <h5 class='card-title'>{$value['nom']}</h5>
                    <div>
                        <p class='card-text'>Temps de préparation : {$value['tempsDePreparation']} min.</p>
                        <p class='card-text'>Temps de cuisson : {$value['tempsDeCuisson']} min.</p>
                        <p class='card-text'>Difficulté : {$value['niveauDeDifficulté']}.</p>
                    </div>
                    <a href='#' class='btn btn-primary'>Go somewhere</a>
                </div>
            </div>
            ";
    }?>
</div>
