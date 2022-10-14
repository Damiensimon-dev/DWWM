
<?php
require_once("models/connection.php");
$connect = maConnection::getInstance();
$rq = "SELECT * FROM departements WHERE dep_actif=1";
$sql2= "SELECT DISTINCT nbr_pieces FROM biens_immobiliers, categories WHERE biens_immobiliers.id_categorie=categories.id_categorie AND categories.lib_categorie='".$_GET["lib_cat"]."' ORDER BY nbr_pieces DESC";

$stmt = $connect->prepare($rq);
$stmt->execute();

$stmt2 = $connect->prepare($sql2);
$stmt2->execute();
//   $tabRes = $stmt->fetchAll();
// var_dump($tabRes);

/* HEADER entete avec dépendances CSS 
  ================================================== */
include( "header.php");
 
 
 /*NAVBAR
    ================================================== */
include("menu.php");

 /* Carousel
    ================================================== */

include("slider.php");


   /*  Marketing mainpage 
    ================================================== 
   Wrap the rest of the page in another container to center all the content. */
//$categorie à definir en fonction de la catégorie de bien choisie dans le formulaire.       
if(!empty($_GET["lib_cat"])) {
  $cat = $_GET["lib_cat"]; 
          }else {
                  $cat=$_GET["val_cat"];
              }
           echo'<h1>Liste des biens immobiliers</h1>';
            echo'<form  action="'.$_SERVER['PHP_SELF'].'?lib_cat='.$cat.'" >
                   <fieldset><legend>Rechercher un Bien immobilier</legend>
                    <div class="form-group">
   <label for="dept">Choisir le département</label>';
   echo '<select name="dep"  id="dep" class="form-control"  style=" max-width:300px">';
   echo "<option value=''>Choisir le département </option>";
          while ($ligne = $stmt->fetch()) {
              if ($ligne->id_dep == $_GET["dep"]) {
                  echo "<option value='".$ligne->id_dep."' selected='true'>" .$ligne->nom_dep."</option>";
              }else {
                  echo "<option value='".$ligne->id_dep."' >" .$ligne->nom_dep."</option>";
              }
          }
   echo '</select>';
   echo' </div>
   <div class="form-group">
   <label for="budget">Montant budget maximum</label>
      <span class="currencyinput">€
  <input type="number"  step="10000" id="bugdet" name="budget" placeholder="Budget Max"  min="50000" max="900000000" />
  </span>
  </div>
  <div class="form-group">
   <label for="nbre" >Nombre de pièces souhaitées:</label>';
   echo '<select name="nbpieces"  id="nbre" class="form-control"  style=" max-width:300px">';
   echo "<option value=''>Choisir le nombre de pièces</option>";
   while($ligne = $stmt2->fetch()){
   if ($ligne->id == $_GET["nbpieces"]) {
       echo "<option value='".$ligne->nbr_pieces."'>".$ligne->nbr_pieces." pièces"."</option>";
   }else{
      echo "<option value='".$ligne->nbr_pieces."'>".$ligne->nbr_pieces." pièces"."</option>";
   }
  }
  echo"</select></div>";
   echo  '
                   <div class="form-group form-button" id="btnsub" >  
                   <input type="hidden" name="lib_cat" value="'.$_GET["lib_cat"].'" >           
   <button type="submit" class="btn btn-primary" name="envoi">Submit</button>
      </div>
      </fieldset>
       </form>'; 
  if(isset($_GET['envoi']) && !empty($_GET["dep"]) && !empty($_GET["nbpieces"])) {
    
      $sql = "SELECT titre, nbr_pieces, surface, prix_vente, description, ges, classe_eco, meuble, localisation, num_departement, ville, charges_annuelles FROM biens_immobiliers  WHERE  num_departement=? AND nbr_pieces=?";
      $maconnection = maConnection::getInstance();
      $param = [$_GET["dep"], $_GET["nbpieces"]];
      $stmt = $maconnection->prepare($sql);
      $stmt->execute($param);
      
  }elseif (isset($_GET["envoi"]) && !empty($_GET["budget"]) && !empty($_GET["nbpieces"])) {

      $sql = "SELECT titre, nbr_pieces, surface, prix_vente, description, ges, classe_eco, meuble, localisation, num_departement, ville, charges_annuelles FROM biens_immobiliers INNER JOIN categories ON biens_immobiliers.id_categorie = categories.id_categorie WHERE lib_categorie='".$_GET["lib_cat"]."' AND prix_vente<=? AND nbr_pieces=? ";
      $maConnection = maConnection::getInstance();   
      $param = [$_GET["budget"], $_GET["nbpieces"]]; 
      $stmt = $maConnection->prepare($sql);
      $stmt->execute($param);

  }elseif(isset($_GET["envoi"]) && !empty($_GET["budget"]) && empty($_GET["nbpieces"])) {

      $sql = "SELECT titre, nbr_pieces, surface, prix_vente, description, ges, classe_eco, meuble, localisation, num_departement, ville, charges_annuelles FROM biens_immobiliers INNER JOIN categories ON biens_immobiliers.id_categorie = categories.id_categorie WHERE lib_categorie='".$_GET["lib_cat"]."' AND prix_vente<=?";
      $maConnection = maConnection::getInstance();   
      $param = [$_GET["budget"]]; 
      $stmt = $maConnection->prepare($sql);
      $stmt->execute($param);

  }
              echo '<table class="table table-striped" ><tbody>';
          $nbr=0;
              while ($obj = $stmt->fetch())
              {
                  $nbr++;
                  echo "<tr>";
                  foreach ($obj as $key => $value) {
                      echo '<td>'.$value.'</td>';
                  }
                  echo "</tr>";
              }
          echo '</tbody></table>';
  include( "acces_membre.php");  
  /* Pied de page avec dépendances Javascript...
      ================================================== */
   include( "footer.php");
            ?>
          
   


