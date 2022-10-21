<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Inscription festival du vin</title>
<!--Elements <meta />  -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript"></script>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<?php
require_once("connection.php");


$connect = maConnection::getInstance();
$rq = "SELECT * FROM departements WHERE dep_actif=1";
$stmt = $connect->prepare($rq);
$stmt->execute();


$mdp = $_POST["mdp"] ?? 0;
password_hash($mdp, PASSWORD_BCRYPT);




// <!--votre formulaire  ici! -->
echo '<h1>Inscription candidat <br> Jeux-Concours</h1>';

echo '<form action="insert.php" method="POST">
<label for="nom">Nom</label>
<input type="text" id="nom" name="nom" placeholder="votre nom">

<br>

<label for="prenom">Prénom</label>
<input type="text" id="prenom" name="prenom" placeholder="votre prénom">

<br>

<label for="mail">email</label>
<input type="email" id="mail" name="mail" placeholder="identifiant">

<br>

<label for="mdp">Mot de passe</label>
<input type="password" id="mdp" name="mdp">

<br>

<label for="verifmdp">Vérification du mot de passe</label>
<input type="password" id="verifmdp" name="verifmdp">

<br>';

echo '<label for="dep">Département de votre domicile principal</label>';

echo '<br>';

echo '<select name="dep"  id="dep" class="form-control">';
echo "<option value=''>Choisir le département </option>";
        while ($ligne = $stmt->fetch()) {
            if ($ligne->id_dep == $_GET["dep"]) {
                echo "<option value='".$ligne->id_dep."' selected='true'>" .$ligne->Name."</option>";
            }else {
                echo "<option value='".$ligne->id_dep."' >" .$ligne->Name."</option>";
            }
        }
echo '</select>';
 
echo '<br>';

echo '<label for="age">Votre age</label>
<input type="number" id="age" name="age">



<br>

<input type="submit" value="Valider" name="valider">

</form>'


?>
<footer></footer>
</body>
</html>
