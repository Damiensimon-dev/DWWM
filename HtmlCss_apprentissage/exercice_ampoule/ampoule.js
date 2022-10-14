let btnAmpoule = document.getElementById("affichage");
//Je recupère l'élément par son ID
let etat = false;
btnAmpoule.addEventListener("click", function (e) {

	e.preventDefault(); //Je rajoute un évènement dans l'évènnement click
	if (etat == false) {
		document.getElementById("ampoule").src = "img/AmpouleOk.GIF";
		//Je change la source de l'image 
		etat = true;//allumé
	}
	else {
		document.getElementById("ampoule").src = "img/AmpouleHS.GIF";
		etat = false;//eteinte
	}
		


 });

