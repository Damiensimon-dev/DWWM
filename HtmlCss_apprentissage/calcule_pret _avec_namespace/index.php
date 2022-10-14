<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Calculer un Pret</h1>
    </header>
    <main>

    <?php require ("financier.php");
    if(isset($_POST["validation"])){
        if(!empty($_POST["emprunt"]) && !empty($_POST["interet"]) && !empty($_POST["remboursement"])){
            
            $financier = new Financier(floatval($_POST["emprunt"]), floatval($_POST["interet"]), floatval($_POST["remboursement"]));
            $mensualite = round($financier->calculeMensualiter(),2);
            
        }    
    }else{
        $mensualite = 0;
        echo "veuillez remplir le formulaire";
    } 
        
    ?>
        <form action="index.php" method="POST" id="form1">

            <label for="emprunt" id="emprunt1">Capital emprunté:</label>
            <input type="text" id="emprunt" name="emprunt" value='<?php
            if(!empty($_POST["emprunt"])){
                echo $_POST["emprunt"];}?>'>
            <br>
            <label for="interet" id="interet1">Taux intérêt en %:</label>
            <input type="text" id="interet" name="interet" value='<?php
            if(!empty($_POST["interet"]))
            { echo $_POST["interet"];}?>'>
            <br>
            <label for="remboursement" id="remboursement1">Durée de remboursement en nb d'année:</label>
            <input type="text" id="remboursement" name="remboursement" value='<?php
            if(!empty($_POST["remboursement"]))
            { echo $_POST["remboursement"];}?>'>
            <br>
            <input type="submit" id="validation" name="validation" value="valider">

            <label for="mensualiter" id="mensualiter1">Mensualité:</label>
            <input type="text" id="mensualiter" name="mensualiter" readonly="true" value='<?php
            $mensualiteRes = (!empty($mensualite))?$mensualiteRes=$mensualite:0; echo $mensualiteRes."€" ?>'>

            <p>Tableau de remboursement (d'amortissements) du prêt</p>
            
            <!-- <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>numero de mois</th>
                        <th>intérêts</th>
                        <th>partie <br> Amortissement</th>
                        <th>capital restant <br>dù</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table> -->
            
            <?php
            if (isset($financier)) {
               
                echo $financier->genererTableau();
            }
                
            ?>

        </form>
        
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

