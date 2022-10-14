function genererArticle(_data) {
	for (let i = 0; i < _data.length; i++) {
		let monObjet = data[i];
		if (i = 0) {
			let monArticle = document.createElement("article");
			monArticle.setAttribute("class", "article" + monObjet.trip_id);
			let monImg = document.createElement("img");
			monImg.setAttribute("src", "images/voyages/id" + monObjet.trip_id);
			// let monImg = document.createElement("img");
			monImg.setAttribute("src", "images/voyages/id" + monObjet.trip_id + ".jpg ");
			monImg.setAttribute("alt", monObjet.trip_title);
			monArticle.appendChild(monImg);

			let monTitre = document.createElement("h2");
			monTitre.innerText = monObjet.trip_title;
			monArticle.appendChild(monTitre);

			let monText = document.createElement("p");
			monText.setAttribute("class", "lead");
			monText.innerText = monObjet.trip_description.substring(0, 150);


			monArticle.appendChild(monText);

			document.querySelector("#films").appendChild(monArticle);
		}
		else {
			let monArticle = document.createElement("article");
			monArticle.setAttribute("class", "article" + monObjet.trip_id);
			let monImg = document.createElement("img");
			monImg.setAttribute("src", "images/voyages/id" + monObjet.trip_id + ".jpg ");
			monImg.setAttribute("alt", monObjet.trip_title);
			monArticle.appendChild(monImg);

			let monTitre = document.createElement("h2");
			monTitre.innerText = monObjet.trip_title;
			monArticle.appendChild(monTitre);

			let monText = document.createElement("p");
			monText.setAttribute("class", "lead");
			monText.innerText = monObjet.trip_description.substring(0, 150,);

			monArticle.appendChild(monText);

			document.querySelector("#films").appendChild(monArticle);
		}
	}

}

let xhr = new XMLHttpRequest();
xhr.open("GET", "voyages.json", true);
xhr.responseType = "json";
xhr.send();

xhr.onload = function () {
	//Si le statut HTTP n'est pas 200...
	if (xhr.status != 200) {
		//...On affiche le statut et le message correspondant
		alert("Erreur " + xhr.status + " : " + xhr.statusText);
		//Si le statut HTTP est 200, on affiche le nombre d'octets téléchargés et la réponse
	} else {
		let data = xhr.response;
		console.log(data);
		genererArticle(data);

	}
};
		