<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Jeux </title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php
    class maConnection
    {

        private static $connection = null;
        private  $host = 'localhost';
        private  $user = 'root';
        private  $pass = '';
        private  $base = 'festival';

        private function __construct()
        {
        }


        static public final function getInstance()
        {
            if (is_null(self::$connection)) {
                try {
                    self::$connection = new PDO('mysql:host=localhost;dbname=festival', 'root', '', array(
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_CASE => PDO::CASE_NATURAL,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                    ));
                } catch (PDOException $e) {
                    die("Database connection failed: " . $e->getMessage());

                    echo "erreur connexion";
                }
            }

            return self::$connection;
        }
    }

    ?>



    <?php $affiche = true;
    if (isset($_POST["envoi"])) {

        if (
            isset($_POST["nom_cli"])  && !empty($_POST["nom_cli"]) &&
            isset($_POST["prenom_cli"])  && !empty($_POST["prenom_cli"]) &&
            isset($_POST["mail_cli"])  && !empty($_POST["mail_cli"]) &&
            isset($_POST["mdp_cli"])  && !empty($_POST["mdp_cli"]) &&
            isset($_POST["verif_mdp"])  && !empty($_POST["verif_mdp"]) &&
            isset($_POST["dept"])  && !empty($_POST["dept"]) &&
            isset($_POST["age_cli"])  && !empty($_POST["age_cli"])

        ) {
            if ($_POST["age_cli"] >= 18) {

                if (($_POST["mdp_cli"])==($_POST["verif_mdp"])) {
                    
                    $connect=maConnection::getInstance();

                    $pass=password_hash($_POST["mdp_cli"],PASSWORD_BCRYPT);
                    $sql="INSERT INTO candidats VALUE(id_user,:nom,:prenom,:email,:mdp,:dep,:age)";
                    $stmt=$connect->prepare($sql);
                    $stmt->bindParam(":nom", $_POST["nom_cli"],PDO::PARAM_STR);
                    $stmt->bindParam(":prenom", $_POST["prenom_cli"],PDO::PARAM_STR);
                    $stmt->bindParam(":email", $_POST["mail_cli"],PDO::PARAM_STR);
                    $stmt->bindParam(":mdp",$pass ,PDO::PARAM_STR);
                    $stmt->bindParam(":dep", $_POST["dept"],PDO::PARAM_STR);
                    $stmt->bindParam(":age", $_POST["age_cli"],PDO::PARAM_INT);
                    $verif=$stmt->execute();
                    if ($verif==true  ) {
                     echo"Vous êtes bien inscrit à notre jeux du festival";
                     $affiche = false;
                    } else {
                        echo"Erreur technique veuillez recommencer l'inscription! ";
                    }
                    


                }else
                {
                    echo"les mots de passe doivent être identique";
                    
                }

                
            } else {
                echo "Vous devez avoir plus de 18 ans";
            }




            
        } else {

            echo "Formulaire mal rempli veuillez remplir toute les zones svp!";
        }
    }


    if ($affiche == true) {




    ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">

            <fieldset>
                <legend>Inscription Candidat<br />Jeux concours</legend>


                <label class="lbl">Nom</label>
                <input type="text" name="nom_cli" id="nom_cli" placeholder="votre nom" maxlength="100" class="txt" />
                <label class="lbl">Prénom</label>
                <input type="text" name="prenom_cli" id="prenom_cli" placeholder="votre prenom" maxlength="50" class="txt" />
                <label class="lbl">Mail</label>
                <input type="email" name="mail_cli" id="mail_cli" placeholder="identifiant" class="txt" />
                <label class="lbl">mot de passe</label>
                <input type="password" name="mdp_cli" id="mdp_cli" class="txt" />
                <label class="lbl"> Verification mot de passe</label>
                <input type="password" name="verif_mdp" id="verif_mdp" class="txt" />
                <label class="lbl">Département de votre domicile principal</label>
                <select name="dept" id="dept">
                    <option value="">Choisir un département</option>
                    <?php
                    $connect = maConnection::getInstance();
                    $sql = "SELECT id_dep,Name FROM departements WHERE dep_actif=1";
                    $stmt = $connect->prepare($sql);
                    $stmt->execute();
                    while ($ligne = $stmt->fetch()) {
                        if (isset($_POST["dept"]) && $_POST["dept"] == $ligne["id_dep"]) {
                            echo '<option value="' . $ligne["id_dep"] . '" selected="true" >' . $ligne["Name"] . '</option>';
                        } else {
                            echo '<option value="' . $ligne["id_dep"] . '" >' . $ligne["Name"] . '</option>';
                        }
                    }

                    ?>



                </select>
                <br />
                <br />
                <label class="lbl">Age</label>
                <input type="number" name="age_cli" id="age_cli" placeholder="18" class="txt" />

                <input type="submit" name="envoi" id="envoi" value="Valider">

            </fieldset>
        </form>

    <?php
    };
    ?>
</body>

</html>