
function creerImage(monObjet, divClasse1){
    let monImg = document.createElement("img");
    monImg.setAttribute("src", "../photos_volcans/" + monObjet.id + ".jpg");
    monImg.setAttribute("class", "d-block w-100");
    divClasse1.appendChild(monImg);
}

function titreSlide(monObjet, divClasse2){
    let titreSlide = document.createElement("h1");
    titreSlide.innerText = monObjet.titre;
    divClasse2.appendChild(titreSlide);
}

function genererImage (_data) {
    for (let i = 0; i < _data.length; i++) {
       
        let monObjet = _data[i];

        if (i == 0) {
        
        let divClasse1 = document.createElement("div");
        divClasse1.setAttribute("class","carousel-item active");
        document.querySelector(".carousel-inner").appendChild(divClasse1);
        
        
        creerImage(monObjet, divClasse1);

        // https://gist.github.com/

        let divClasse2 = document.createElement("div");
        divClasse2.setAttribute("class", "carousel-caption d-none d-md-block")
        divClasse1.appendChild(divClasse2);

        titreSlide(monObjet, divClasse2);
        
       
        }
        else{
        
        let divClasse1 = document.createElement("div");
        divClasse1.setAttribute("class","carousel-item");
        document.querySelector(".carousel-inner").appendChild(divClasse1);
        
        
        creerImage(monObjet, divClasse1);

        let divClasse2 = document.createElement("div");
        divClasse2.setAttribute("class", "carousel-caption d-none d-md-block")
        divClasse1.appendChild(divClasse2);

        titreSlide(monObjet, divClasse2);
 
        }
        
    }    
}




function chargerDiapo() {
    let min =document.getElementById("min").value;
    let max =document.getElementById("max").value;
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "../test_diapo/traitement.php?min=" + min + "&max=" + max, true);
    // xhr.responseType = "json";
    xhr.send();
    xhr.onload = function() {
        //Si le statut HTTP n'est pas 200...
        if (xhr.status != 200) {
            //...On affiche le statut et le message correspondant
            alert("Erreur " + xhr.status + " : " + xhr.statusText);
            //Si le statut HTTP est 200, on affiche le nombre d'octets téléchargés et la réponse
        } else {
            let data = JSON.parse(xhr.responseText);
            // console.log(data);
            genererImage(data);
        }
    };
}

document.getElementById("valider").addEventListener("click", function(){
    let supprDiv = document.querySelector(".carousel-inner");
    supprDiv.remove();
    let divCarrou = document.createElement("div");
    divCarrou.setAttribute("class", "carousel-inner");
    document.querySelector("#carouselExampleCaptions").appendChild(divCarrou);
    chargerDiapo();
});






// document.getElementById("valider").addEventListener("click", function(){

//     let mesDiv = document.querySelector("#photos");
    
//     mesDiv.innerHTML = [];
    
//     chargerDiapo();
    
// });
    
// fetch("volcan.json")
// .then(response => response.json())
// .then(response => genererImage(response))
// .catch(error => alert("Erreur ;" + error));
