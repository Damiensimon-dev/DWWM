<!doctype html>
<html lang="Fr">
<head>
  <meta charset="utf-8">
  <title>Entrainement Centre de Readaptation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" media="screen" href="css/style.css">
  <link rel="stylesheet" href="css/test.css">
</head>	
<body>



<?php


require "connection.php";

$connect = maConnection::getInstance();
$rq = "SELECT * FROM departements WHERE dep_actif";

$stmt = $connect->prepare($rq);
$stmt->execute();
// $tabRes = $stmt->fetchAll();
// var_dump($tabRes);


?>

        <div id="page">
         <div id="header">
          <img src="contenu/header.jpg" width="980" height="176" alt="colblanc entete"> 
        </div>

        <div id="menu">
          <ul>
           <li><a href="#">Entreprises</a>
            <ul>
             <li><a href="#" target="_self">Visualiser</a>
             </li>
             <li><a href="filtre.php">Rechercher</a>
             </li>
             <li><a href="#">Ajouter</a>
             </li>
           </ul>
         </li>
         <li><a href="#">Candidats</a>
          <ul>
           <li><a href="#" target="_self">Listing</a>
           </li>
           <li><a href="#">rechercher</a>
           </li>
           <li><a href="#">Ajouter</a>
           </li>
           <li><a href="#">CVthèque</a>
           </li>
         </ul></li>
         <li><a href="#">Projets</a>

         </li>
         <li><a href="#">offres</a>
          <ul>

            <li><a href="#">Par secteur</a>

            </li>

            <li><a href="#" name="mesChoix[]">Par entreprises</a>

            </li>
          </ul>
        </li>
      </ul>
    </div>




    <main>
      <section> 
      <form action="colblanc.php" method="GET" enctype="multipart/form-data">  
      
        <h1 style=" text-align:center">Résultat de votre recherche : </h1>

        <label for="cp">Choississer votre département : </label>
        <select id="cp" name="cp">
        <?php while ($ligne = $stmt->fetch()) {
          if ($ligne->id_dep == $_GET["cp"]) {
            echo "<option value='".$ligne->id_dep."' selected='true'>".$ligne->Name."</option>";
          } else {
            echo "<option value='".$ligne->id_dep."' >".$ligne->Name."</option>";
          }
          
        }  ?>
  
        </select>

        <br>
        
          <label for="etablissement" id="etablissement">Sélectionner votre type d'établissement : </label>
          
            <br>

            <input type="checkbox" name="mesChoix[]" id="tpe" value="TPE" <?php if(isset($_GET['mesChoix']) AND in_array("TPE", $_GET['mesChoix'])) {echo 'checked="checked"';} ?>>
            <label for="tpe">TPE</label>
          
            <br>
       
            <input type="checkbox" name="mesChoix[]" id="pme" value="PME"<?php if(isset($_GET['mesChoix']) AND in_array("PME", $_GET['mesChoix'])) {echo 'checked="checked"';} ?>>
            <label for="pme">PME</label>
          
            <br>
         
            <input type="checkbox" name="mesChoix[]" id="grandeEntreprise" value="GE" <?php if(isset($_GET['mesChoix']) AND in_array("GE", $_GET['mesChoix'])) {echo 'checked="checked"';} ?>>
            <label for="grandeEntreprise">GRANDE ENTREPRISE</label>
         
            <br>
          
            <input type="checkbox" name="mesChoix[]" id="collectiviteTer" value="CT" <?php if(isset($_GET['mesChoix']) AND in_array("CT", $_GET['mesChoix'])) {echo 'checked="checked"';} ?>>
            <label for="collectiviteTer">COLLECTIVITE TER</label>
         
            <br>
         
            <input type="checkbox" name="mesChoix[]" id="association" value="ASSOC" <?php if(isset($_GET['mesChoix']) AND in_array("ASSOC", $_GET['mesChoix'])) {echo 'checked="checked"';} ?>>
            <label for="association">ASSOCIATION</label>
         
            <br>
          
            <input type="checkbox" name="mesChoix[]" id="autre" value="AUTRES" <?php if(isset($_GET['mesChoix']) AND in_array("AUTRES", $_GET['mesChoix'])) {echo 'checked="checked"';} ?>>
            <label for="autre">AUTRES (secteur public)</label>
          
            <br>

          <input type="print" id="imprimer" name="imprimer" value="Imprimer">
          <input type="submit" id="valider" name="valider" value="Valider">

          <?php
              if(isset($_GET["valider"]) && !empty($_GET["cp"])){
                  $finRq = " ";
                  $param = [$_GET["cp"]];
                  if(isset($_GET["mesChoix"]) && count($_GET["mesChoix"]) > 0){
                    $finRq = "AND type_etab IN (";
                    for ($i = 0; $i < count($_GET["mesChoix"]); $i++) { 
                      $finRq.= "?,";
                      array_push($param,$_GET["mesChoix"][$i]);
                    }
                    $finRq = substr($finRq,0,-1);
                    $finRq .=")";
                  }
                  $sql= "SELECT nom_etab, type_etab, adresse, cp, ville, Telephone FROM institutions WHERE depart = ? ".$finRq;
                  // echo $sql."<br>";
                  $maconnexion = maConnection::getInstance();
                  $stmt = $maconnexion->prepare($sql);       
                  //$stmt->bindParam("departement", $_GET["cp"], PDO::PARAM_INT);
                  $stmt->execute($param);
                  // var_dump($stmt->fetchAll());
              }


              echo '<table class="table table-striped"><thead><thead><tr><th>Nom Etablissement</th><th>Type Etablissement</th><th>Adresse</th><th>Code Postal</th><th>ville</th><th>Telephone</th></tr></thead><tbody>';
                  $nbr=0;
                    while ( $obj = $stmt->fetch())
                    { $nbr++;
                      echo "<tr>";
                      foreach ($obj as $key => $value) {
                        echo '<td>'.$value.'</td>';
                      }
                      echo "</tr>";
                    }
                    echo '<tbody></table>';
            ?>
        
      
      </form>
   <aside>

</aside>
 </section>
    </main>



<footer>
  Copyright
</footer> 
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>