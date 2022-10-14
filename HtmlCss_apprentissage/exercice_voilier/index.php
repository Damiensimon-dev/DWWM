<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <h1>ACCES MEMBRES</h1>
        <label for="email"  id="email">Email</label>
        <br>
        <input type="email" name="email" id="email" placeholder="kevin@exemple.com">
        <br>
        <label for="mdp"  id="mdp">Mot de passe</label>
        <br>
        <input type="password" name="mdp" id="mdp">
        <br>
        <input type="submit" id="valider" name="valider" value="Valider">
    </form>

    

    <br>

    <?php
    
    require "connection.php";
    if (isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["mdp"]) && !empty($_POST["mdp"])){
        $connect = maConnection::getInstance();
        $sql = "SELECT * FROM utilisateurs WHERE mail_user = ?";
        $stmt = $connect->prepare($sql);
        $stmt->execute(array($_POST["email"]));
        $ligne = $stmt->fetch();
        //var_dump($ligne);
        
            if($stmt->rowCount() != 0){
                if(password_verify($_POST["mdp"], $ligne[4])== true){
                $_SESSION["nom_ut"] = $ligne[1];
                $_SESSION["prenom_ut"] = $ligne[2];
                header("Location: liste.php");
                }
                else{
                    echo "Mot de passe ou Login incorrecte";
                }
            } else{
                echo "Mot de passe ou Login incorrecte";
            }
    }else{
       echo "Veuillez remplir tous les champs"; 
    }
?>
    <br>
    
    <a href="liste.php">bascule vers la liste.php</a>
</body>
</html>

