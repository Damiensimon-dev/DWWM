<?php
require_once("connection.php");
require_once("index_base.php");


$connect2 = maConnection::getInstance();
$rq2 = "INSERT INTO candidats (lastname_user, firstname_user, mail_user, pass_user, departement_user, age_user) VALUES ('$_POST[nom]','$_POST[prenom]','$_POST[mail]','$_POST[mdp]','$_POST[dep]','$_POST[age]')";
$stmt2 = $connect2->prepare($rq2);
$stmt2->execute();

echo "Nouveaux enregistrement ajoutés avec sucéés";