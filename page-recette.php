<?php
$_SESSION ['recettes'] = [
        [
            'nom' => 'test',
	        'temps de preparation' => 10,
	        'temps de cuisson' => 15,
	        'niveau de difficulté' => 'Accessible',
	        'nombre de personnes' => 4,
	        'ingredients' => 'Tomate',
            'quantitéUnité' => 5,
            'quantitéPoids' => 400,
        ],
    [
        'nom' => 'test',
        'temps de preparation' => 10,
        'temps de cuisson' => 15,
        'niveau de difficulté' => 'Accessible',
        'nombre de personnes' => 4,
        'ingredients' => 'Tomate',
        'quantitéUnité' => 5,
        'quantitéPoids' => 400,
    ],
];
var_dump($_SESSION);
?>

<h1>Page recette</h1>

<?php foreach ($_SESSION ['recettes'] as $key => $value) {
    echo "
        <div class='card' style='width: 18rem;'>
            <img src='https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo-shadow.png' class='card-img-top' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'>Card title</h5>
                <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href='#' class='btn btn-primary'>Go somewhere</a>
            </div>
        </div>
    ";
}