<?php

session_start();

	if(!empty($_POST["sup"])){
        unset($_SESSION["nom_ut"]);
    }
    if(!empty($_SESSION["nom_ut"])){ 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<ul>
		<li  class="">
			<a  class="" href="/edel/edel2" >
				<span class="">Edel Grand-large</span>
			</a>
		</li>
		<li  class="">
			<a class="" href="/edel/edel2" >
				
				<span class="">Edel 2</span>	
			</a>
		</li>
		<li  class="">
			<a class="" href="/edel/edel3" >
				
				<span class="">Edel 3</span>	
			</a>
		</li>
		<li  class="">
			<a class="" href="/edel/edel4" >
				
				<span class="">Edel 4</span>
			</a>
		</li>
		<li  class="">
			<a  class="" href="/edel/edel-5-545" >
				
				<span class="">Edel 5 / 545 / Dayboat</span>	
			</a>
		</li>
		<li  class="">
			<a  class="" href="/edel/edel600" >
				
				<span class="">Edel 600</span>	
				
			</a></li>
			<li  class="">
				<a class="" href="/edel/edel-6-660-665" >
					
					<span class="">Edel 6 / 660 / 665</span>
					
				</a>
			</li>
			<li  class="">
				<a class="" href="/edel/edel730" >
					
					
					<span class="">Edel 730</span>	
					
				</a>
			</li>

			<li  class="">
				<a  class="" href="/edel/edel820" >
					
					<span class="">Edel 820</span>	
				</a>
			</li>
		</ul>
		<form name="button"  method="POST">
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
