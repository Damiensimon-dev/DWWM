let codepostal = document.getElementById('cp').value;
document.getElementById("valider").addEventListener("click", function () {
    let regexnonvide = /^[a-zA-Z]+$/;
    let monNom = document.getElementById("nom").value;
    //alert(monNom);
    let prenom = document.getElementById("prenom").value;
    let numMembre = document.getElementById("membre").value;
    let regexmembre = /^[0-9]{8,8}$/;
    let adresse = document.getElementById("adresse").value;
    let regexadresse = /^[a-zA-Z0-9\s]+$/;
    let code = document.getElementById("cp").value;
    let regexcp = /^[0-9]{5,5}$/;
    let email = document.getElementById("email").value;
    let regexmail = /^[a-z]+[a-z0-9_.-]*[@][a-z0-9_.-]{2,}[.][a-z]{2,4}$/;
    let regextel= /^[0-9]{10,10}$/;
    let tel = document.getElementById("tel").value
    if (regexnonvide.test(monNom)==true && regexnonvide.test(prenom)==true && regexmembre.test(numMembre) && regexadresse.test(adresse) && regexcp.test(code) && regexmail.test(email) && regextel.test(tel) ) {
        alert("formulaire bien rempli");
    } else {
        alert("formulaire mal rempli");
    }
});