<?php
    session_start();
    if(!empty($_GET["sup"])){
        unset($_SESSION["nom"]);
    }
    if(!empty($_SESSION["nom"])){ 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecter</title>
</head>
<body>
    <?php
        echo "bonjour ". $_SESSION["nom"]. " bien arriver !!";  
    ?>
    <br>
    <form name="button"  method="GET">
    <input type="submit" value="Déconnexion">
    <input type="hidden" name="sup" id="sup" value="Suppression">
    </form>
</body>
<?php
}else{
    header("location: index.php");
}
?>
</html>

