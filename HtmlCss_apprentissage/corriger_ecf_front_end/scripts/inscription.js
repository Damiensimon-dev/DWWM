const monNom = document.getElementById("nom");
const monPrenom = document.getElementById("prenom");
const monMail = document.getElementById("email");
const monPassword = document.getElementById("pwd");
const verifPassword = document.getElementById("verifpwd");
const age = document.getElementById("age");

function validationOk() {




	let verifBool = false;

	if (monNom.value != "" && monPrenom.value != "" && monMail.value != "" && monPassword.value != "" && verifPassword.value != "" && age.value != "") {
		verifBool = true

	}

	return verifBool;
}

function verifSend() {
	verif = false;
	let regexnom = /^[A-Z][a-z]+([-][A-Z][a-z]+)?$/;
	let regexprenom = /^[A-Za-z]+([-][A-Za-z]{2,})?$/;
	let regexmail = /^[a-z]+[a-z0-9_.-]*[@][a-z0-9_.-]{2,}[.][a-z]{2,4}$/; 



	let lepwd = monPassword.value;
	let chainepwd = lepwd.trim();

	if (regexnom.test(monNom.value) && regexprenom.test(monPrenom.value) && regexmail.test(monMail.value) && chainepwd.length >= 4 && monPassword.value == verifPassword.value && Number(age.value) >= 18) {
		verif = true;

	}


	return verif;
}
btnvalidation = document.querySelector("#validation");




btnvalidation.addEventListener("click",
	function () {


		//		alert("test");


		if (validationOk()) {
			result = verifSend();
			if (result == true) {
				document.getElementById("formulaire1").submit();
			} else {
				message = document.getElementById("summary");
				message.innerText = " Formulaire mal rempli, veuillez recommencer ! ";
			}
		} else {
			message = document.getElementById("summary");
			message.innerHTML = " <b>Veuillez remplir tous les champs !</b><br> ";
		}

	});


































