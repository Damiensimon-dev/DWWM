const monNom = document.querySelector("#nom");
const prenom = document.querySelector("#prenom");
const mail = document.querySelector("#email");
const mdp = document.querySelector("#mdp");
const verifMdp = document.querySelector("#verifMdp");
const age = document.querySelector("#age");


function validationOK(){
    verifBool = false;

    if(monNom.value!="" && prenom.value!="" && mail.value!="" && mdp.value!="" && verifMdp.value!="" && age.value!=""){
        alert("c'est bon");
        document.querySelector("#form1").submit();
        verifbool = true;
    }else{
        
        let monForm = document.querySelector("#form1");
        let maDiv = document.createElement("div");
        maDiv.setAttribute("id", "summary");
        maDiv.innerText = "Veuillez remplir tous les champs !"
        
        monForm.appendChild(maDiv)
        verifBool = false;
    }

    return verifBool;
}

function verifSend(){
     
    // je suis bloqué !!!!!!!! 


}

let monBouton = document.querySelector("#valider");
monBouton.addEventListener("click", function() {
    validationOK();
})