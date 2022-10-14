function getCookie(_name)
{
    let reponse = false;

    let tabCookie = document.cookie.split("; ");
    for (let i = 0; i < tabCookie.length; i++) 
    {
        let tabParam = tabCookie[i].split("=");
        if (tabParam[0] == _name) 
        {
            reponse = tabParam[1];    
        }   
        
    }

    return reponse;
}

if(getCookie("expediteur")!=false)
{
    let parent = document.querySelector(".parent");
    let enfant = document.querySelector(".enfant");
    enfant.remove();
    let boiteMessage = document.createElement('div');
    let expediteur = getCookie("expediteur");
    boiteMessage.setAttribute("style","color: grey; font-size:1.4em; font-family:impact; text-align:center; padding-left:400px; width:230%");
    boiteMessage.innerHTML = "« Bonjour M.(e) <u> " +expediteur+ "</u> votre message nous a bien été envoyé(e). Nous vous contacterons dans les meilleurs délais.";
    parent.appendChild(boiteMessage);
}





const monNom = document.querySelector("#nom");
const monTel = document.querySelector("#tel");
const monMail = document.querySelector("#email");


function verifySend()
{
    let maRegex = /^[a-z]+(-[a-z]+)?$/i
    
    verifBool = false;
    
    if (monNom.value!="" && monTel.value!="" && monMail.value!="" && maRegex.test(monNom.value)) 
    {
        alert("formulaire bien rempli");

        let dateJour = new Date();
        let dateExpiration = new Date(dateJour.getFullYear(), dateJour.getMonth(), dateJour.getDate(), (dateJour.getHours()+3), dateJour.getMinutes(), dateJour.getSeconds(), dateJour.getMilliseconds());
        let expiration = dateExpiration.toUTCString();

        document.cookie = "expediteur="+monNom.value+ "; expires="+ expiration+";SameSite = strict";


        verifBool = true;    

    }
    return verifBool;
}




let monBouton = document.querySelector("#envoyer");
monBouton.addEventListener("click", function() {
    if(verifySend()) 
    {
        document.querySelector("#form1").submit();
    }
    else
    {
        alert("Saisie non conforme !!!!!!!!!!");
    }
})


/* <div class="item active">
          <img src="img/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Sign up today</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            </div>
          </div>
        </div> */

function genererDiapo(_data){

    for (let i = 0; i < _data.length; i++) {
        let monObjet = _data[i];
        
        if (i == 0) {
            let monItem = document.createElement("div");
            monItem.setAttribute("class", "item active");

            let monImg = document.createElement("img");
            monImg.setAttribute("src", "img_slider_modif/fond"+ monObjet.id+".jpg");
            monImg.setAttribute("alt",monObjet.titre);
            monItem.appendChild(monImg);

            let monItem2 = document.createElement("div");
            monItem2.setAttribute("class" , "container");
            monItem.appendChild(monItem2);

            let monItem3 = document.createElement("div");
            monItem3.setAttribute("class", "carousel-caption");
            monItem2.appendChild(monItem3);

            let monTitre = document.createElement("h1");
            monTitre.innerText = monObjet.titre;
            monItem3.appendChild(monTitre);

            let monAccroche = document.createElement("p");
            monAccroche.setAttribute("class","lead");
            monAccroche.innerText = monObjet.accroche;
            monItem3.appendChild(monAccroche);
            monAccroche.setAttribute("style" ,"color : red");

            let monBouton = document.createElement("input");
            monBouton.setAttribute("type","button")
            monBouton.setAttribute("class","btn btn-large btn-primary");
            monBouton.value = "en savoir plus"
            monItem3.appendChild(monBouton);
            monBouton.setAttribute

            document.querySelector(".carousel-inner").appendChild(monItem);
           

        } 
        else 
        {
            let monItem = document.createElement("div");
            monItem.setAttribute("class", "item");

            let monImg = document.createElement("img");
            monImg.setAttribute("src", "img_slider_modif/fond"+ monObjet.id+".jpg");
            monImg.setAttribute("alt",monObjet.titre);
            monItem.appendChild(monImg);

            let monItem2 = document.createElement("div");
            monItem2.setAttribute("class" , "container");
            monItem.appendChild(monItem2);

            let monItem3 = document.createElement("div");
            monItem3.setAttribute("class", "carousel-caption");
            monItem2.appendChild(monItem3);

            let monTitre = document.createElement("h1");
            monTitre.innerText = monObjet.titre;
            monItem3.appendChild(monTitre);

            let monAccroche = document.createElement("p");
            monAccroche.setAttribute("class","lead");
            monAccroche.innerText = monObjet.accroche;
            monItem3.appendChild(monAccroche);
            monAccroche.setAttribute("style" ,"color : red");

            let monBouton = document.createElement("input");
            monBouton.setAttribute("type","button")
            monBouton.setAttribute("class","btn btn-large btn-primary");
            monBouton.value = "en savoir plus"
            monItem3.appendChild(monBouton);

            document.querySelector(".carousel-inner").appendChild(monItem);

        }
        
    }



}





let xhr = new XMLHttpRequest();
xhr.open("GET", "diapo.json", true);
xhr.responseType = "json";
xhr.send();

xhr.onload = function() {
    //Si le statut HTTP n'est pas 200...
    if (xhr.status != 200) {
    //...On affiche le statut et le message correspondant
    alert("Erreur " + xhr.status + " : " + xhr.statusText);
    //Si le statut HTTP est 200, on affiche le nombre d'octets téléchargés et la réponse
    } else {
    let data = xhr.response;
    // console.log(tabdata);
    console.log(data);
    genererDiapo(data);
   }
};

