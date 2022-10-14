let tabMois = ['janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre'];
let tabsigne = ["Capricorne","Verseau","Poisson","Belier","Taureau","Gémeaux","Cancer","Lion","Vierge","Balance","Scorpion","Sagittaire"];


function afficherMois() {
    let opt = document.createElement("option");
    opt.textContent = " Mois";
    opt.value = "";
    document.querySelector("#mois").appendChild(opt);

    for (let i = 0; i < tabMois.length; i++) 
    {
        opt = document.createElement("option");
        opt.textContent = tabMois[i];
        opt.value = i + 1;
        document.querySelector("#mois").appendChild(opt);
    } 
}

afficherMois();

function afficherJour() {
    let opt = document.createElement("option");
    opt.textContent = "Jour";
    opt.value = "";
    document.querySelector("#jour").appendChild(opt);

    for (let i = 1; i <= 31; i++) {
        opt = document.createElement("option");
        opt.value = i;
        // meme chose que la ligne 30 à 37 !!!!!
        (i<10)?opt.textContent = "0" + i : opt.textContent = i; 
        // if(i < 10)
        // {
        //     opt.textContent = "0" + i;
        // }
        // else
        // {
        //     opt.textContent = i;
        // }

        document.querySelector("#jour").appendChild(opt);  
    } 
}

afficherJour();

function afficherAnnee() {
    opt = document.createElement("option");
    opt.textContent = " Annee";
    opt.value = "";
    document.querySelector("#annee").appendChild(opt);

    for (let i = 1950; i < 2005; i++) 
    {
        let opt = document.createElement("option");
        opt.textContent = i;
        opt.value = i;
        document.querySelector("#annee").appendChild(opt);  
    } 
}

afficherAnnee();


function valNum(_maChaine) {
    _maChaine.toUpperCase();
    let som = 0;
    for (let i = 0; i < _maChaine.length; i++) 
    {
        som += _maChaine.charCodeAt(i)-64;
        
    }
    return som
}


function calculerSigne() {
    let numMois = document.querySelector("#mois").value;
    let signe = tabsigne[numMois - 1];
    return signe;
}


function formOk() {
    let nom = document.querySelector("#nom").value;
    nom = nom.trim();
    let prenom = document.querySelector("#prenom").value;
    prenom = prenom.trim();
    let mois = document.querySelector("#mois").value;
    let verifForm = false;
    if(nom!="" && prenom!="" && mois.length > 0)
    {
        verifForm = true;
    } 
    return verifForm;
}


function calculerPseudo() {
    if(formOk() == true)
    {
        let chainePseudo = calculerSigne()+(valNum(document.querySelector("#nom").value) + valNum(document.querySelector("#prenom").value));
        document.querySelector("#pseudo").value = chainePseudo;
        document.querySelector("#validation").disabled = false;
    }
}

document.getElementById("annee").addEventListener("blur", calculerPseudo);




function cookie(_nomCookie, _contenueCookie) {
    let dateJour = new Date();
    let dateExpire = new Date(dateJour.getFullYear(), dateJour.getMonth(), dateJour.getDate() + 1);
    let dateExpiration = dateExpire.toUTCString();

    document.cookie = _nomCookie + "=" + _contenueCookie + "; expires = " + dateExpiration + "; SameSite = strict"; 

}




document.querySelector("#validation").addEventListener("click", function () {
    cookie("name",document.getElementById("nom").value);
    cookie("prenom",document.querySelector("#prenom").value);
    let mois = document.querySelector("#mois").value;
    if(mois < 10){
        mois = "0" + document.querySelector("#mois").value;
    };
    let dateNaissance = document.getElementById("jour").value + "/" +mois+ "/" + document.getElementById("annee").value;
    cookie("dateAnniv",dateNaissance);
    cookie("pseudo",document.querySelector("#pseudo").value);
    // let jourRestant = days;
    // cookie("jourRestant",jourRestant);
    document.getElementById("form1").submit();
})












