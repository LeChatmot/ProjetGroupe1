<?php 
include 'header.php';


    $_SESSION["id"] =[
        "nom" => "miann",
        "tempsdeprepa" => "30 min",
        "tempsdecuisson" => "15",
        "niveaudedifficulte" => "Moyen",
        "nombredepersonnes" => "4 personnnes",
        ];

var_dump($_SESSION);
?>

<style> .card { height:200px; width: 80%;
margin: auto;
}</style>


    <h2>3 Idées de recettes.</h2>

    <?php foreach($_SESSION as $key => $value ){ ?>

        
    <div class="card text-bg-dark">
        <!-- <img src="..." class="card-img"> -->
    <div class="card-img-overlay">
        <h5 class="card-title"><?=$value['nom']?></h5>
        <p class="card-text"><?= $value['tempsdeprepa']?></p>
        <p class="card-text"><?= $value['niveaudedifficulte']?></p>
        <!-- <p class="card-text"><small>Last updated 3 mins ago</small></p> -->
    </div>
    </div>



<?php }?>

<?php 
include 'footer.php';
?>