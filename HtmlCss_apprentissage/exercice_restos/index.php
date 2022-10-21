<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php

    // phpinfo();
    function d($variable)
    {
        echo '<pre>';
        echo var_export($variable, true);
        echo '</pre>';
    }

    require("Mytable.php");
    
    $monObjetTable = new Mytable("restaurants");

    $nomCols = $monObjetTable->recupererNomCol();

    $donneesCols = $monObjetTable->recupererDonnees();

    echo "<table class='table table-dark table-striped'><thead><tr>";

    foreach($nomCols as $titre){
        echo "<th>".$titre."</th>";
    }
    echo "<th>Modifier</th>";
    echo "</tr></thead><tbody>";
    
    for ($i=0; $i < $monObjetTable->getStmt()->rowCount(); $i++) { 
        $ligne = $donneesCols[$i];
        
        echo "<tr>";
        
        foreach($ligne as $value){
            echo "<td>".$value."</td>";
        }
        
        echo "<td><form action='formulairModifier.php' method='GET' enc-type='text/plain'><input  type='submit' id='modifie".$donneesCols[$i][0]."' name='modif".$donneesCols[$i][0]."'
            value='modifier'><input type='hidden' name='modifligne' value='".$donneesCols[$i][0]."'></form></td></tr>";
    }

    echo "</tbody></table>";

    
    // $dsn = "mysql:dbname=".BASE.";host=".SERVER;
    // try {
    //     $connnexion = new PDO($dsn,USER,PASSWD);
    // } catch (PDOException $e) {
    //     printf("Échec de la connexion : %s\n", $e->getMessage());
    //     exit();
    // }
    // $sql="SELECT * from restaurants";
    // if(!$connnexion->query($sql)) echo "Pb d'accès a restaurants";
    // else {
    //     // foreach($connnexion->query($sql) as $row)
    //     // echo " Nom : ".
    //     //      $row['nom']." , Adresse :".
    //     //      $row['adresse']." , Prix : ".
    //     //      $row['prix']."€ ".
    //     //      $row['Commentaire']." Note : ".
    //     //      $row['Note']." , Date de visite : ".
    //     //      $row['visite']."<br/> \n";   
    //     echo "<table class='table table-dark table-striped'><thead><tr><th>id</th><th>Nom</th><th>Adresse</th><th>Prix</th><th>Commentaire</th><th>Note</th><th>Visite</th></tr></thead><tbody>";
    //     $stmt = $connnexion->query($sql);
    //     while ($ligne = $stmt->fetch(PDO::FETCH_NUM)) {
    //         echo "<tr>";
    //         for ($i=0; $i < count($ligne); $i++) { 
    //             echo "<td>".$ligne[$i]."</td>";
    //         }
    //         echo "</tr>";
    //     }
    //     echo "</tbody></table>";
    // }
    
?>    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>   
</body>
</html>