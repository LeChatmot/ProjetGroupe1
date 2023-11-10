<?php 
    include 'header.php'
?>

<h1>Ajouter un ingredient</h1>

<form action="validAjoutIngredients.php" method="get" class="form-control">
    <div class="mb-3">
        <label for="name">Nom de l'ingredient:</label>
        <input type="text" name="name" id="name">
    </div>
    <div class="mb-3">
        <label for="nature">Nature de l'ingredient:</label>
        <input type="text" name="nature" id="nature">
    </div>
    <div class="mb-3">
        <label for="saison">Saison de l'ingredient:</label>
        <select name="saison" id="saison">
            <option value="printemps">printemps</option>
            <option value="ete">ete</option>
            <option value="automne">automne</option>
            <option value="hiver">hiver</option>
            <option value="toutes">toutes</option>
        </select>
    </div>
    <div class="mb-3">
        <input type="submit" value="envoyer">
    </div>
</form>