<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto-authentification</title>
</head>
<body>
    <form action="index.php" method="GET" enctype="multipart/form-data">
        <fieldset>
            <legend>login agence location voilier</legend>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="nom d'utilisateur">
            <br>
            <label for="mdp">Mot de passe :</label>
            <input type="password" id="mdp" name="mdp">
            <br>
            <button id="valider" name="valider">OK</button>
        </fieldset>
    </form>

    <?php
        session_start();
        $mdp = "Castafiore";    
        $chaine = password_hash($mdp, PASSWORD_BCRYPT);

        $table_acces = ["admin"=>password_hash("Cdi1234",PASSWORD_BCRYPT),
                        "Bianca"=>$chaine];
                        
        if(isset($_GET["valider"])){
            if(!empty($_GET["nom"]) && !empty($_GET["mdp"])){
                $trouve = false;
                foreach($table_acces as $key=>$value){
                    if($key == $_GET["nom"] && password_verify($_GET["mdp"],$value)){
                        $trouve = true;
                        $_SESSION["nom"] = $_GET["nom"];
                        header("location: info.php");
                    }
                }
                if($trouve == false){
                    echo "Error de login ou mdp ";
                }
            }
            else{
                    echo "Veuillez remplir tous les champs !!! ";
            }
        }
    
    
    
    
    
    
    ?>
</body>
</html>