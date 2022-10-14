<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire calcul impot sur le revenu</title>
</head>
<body>
    <form action="index.php" method="post" id="form1" >
        <label for="lastname">Nom :</label>
        <input type="text" name="lastname" id="lastname" placeholder="votre nom ici" value='<?php
        if(!empty($_POST["lastname"])) {
            echo $_POST["lastname"];
        } ?>'><br>

        <label for="revenu">Montant Revenu Annuel :</label>
        <input type="number" name="revenu" id="revenu" placeholder="revenu annuel" value='<?php
        (!empty($_POST["revenu"])) ? print($_POST["revenu"]) : print(""); ?>'><br>

        <input type="submit" value="Calculer impôt" id="ir" name="ir">
    </form>

    <?php  
    require("models/contribuable.php"); 
    if (!empty($_POST["lastname"]) && !empty($_POST["revenu"])) {
        
        $monContribuable = new Contribuable($_POST["lastname"], $_POST["revenu"]);

        $impot = $monContribuable->calculImpot();

        echo "M(e)".($monContribuable->getNom())." vous avez un impôt sur le revenu de :".($impot)." € à régler";
    }

    ?>
    
</body>
</html>