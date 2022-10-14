
function genererMesArticle(_data){
    for (let i = 0; i < _data.length; i++) {
       
        monObjet = _data[i];
        let maSection = document.querySelector("#films");
        switch(i){
            case 0:
                
                let monArticle1 = document.createElement("article");
                maSection.appendChild(monArticle1);
                let monTitre1 = document.createElement("h2")
                monTitre1.innerText = monObjet.trip_title;
                monArticle1.appendChild(monTitre1);
                let monImage1 = document.createElement("img");
                monImage1.setAttribute("src", "images/voyages/id1.jpg");
                let maDiv = document.createElement("div");
                monArticle1.appendChild(maDiv);
                maDiv.appendChild(monImage1);
                let monP1 = document.createElement("p");
                monP1.innerText = monObjet.trip_description.substr(0,150);
                monArticle1.appendChild(monP1);
                let monButton1 = document.createElement("input");
                monButton1.setAttribute("type", "button");
                monButton1.value = "lire la suite";
                monArticle1.appendChild(monButton1);
                break;
            case 1:
                let monArticle2 = document.createElement("article");
                maSection.appendChild(monArticle2);
                let monTitre2 = document.createElement("h2")
                monTitre2.innerText = monObjet.trip_title;
                monArticle2.appendChild(monTitre2);
                let monImage2 = document.createElement("img");
                monImage2.setAttribute("src", "images/voyages/id2.jpg");
                let maDiv2 = document.createElement("div");
                monArticle2.appendChild(maDiv2);
                maDiv2.appendChild(monImage2);
                let monP2 = document.createElement("p");
                monP2.innerText = monObjet.trip_description.substr(0, 150);
                monArticle2.appendChild(monP2);
                let monButton2 = document.createElement("input");
                monButton2.setAttribute("type", "button");
                monButton2.value = "lire la suite";
                monArticle2.appendChild(monButton2);
                break;
            case 2:
                let monArticle3 = document.createElement("article");
                maSection.appendChild(monArticle3);
                let monTitre3 = document.createElement("h2")
                monTitre3.innerText = monObjet.trip_title;
                monArticle3.appendChild(monTitre3);
                let monImage3 = document.createElement("img");
                monImage3.setAttribute("src", "images/voyages/id3.jpg");
                let maDiv3 = document.createElement("div");
                monArticle3.appendChild(maDiv3);
                maDiv3.appendChild(monImage3);
                let monP3 = document.createElement("p");
                monP3.innerText = monObjet.trip_description.substr(0, 150);
                monArticle3.appendChild(monP3);
                let monButton3 = document.createElement("input");
                monButton3.setAttribute("type", "button");
                monButton3.value = "lire la suite";
                monArticle3.appendChild(monButton3);
                break;
            case 3:
                let monArticle4 = document.createElement("article");
                maSection.appendChild(monArticle4);
                let monTitre4 = document.createElement("h2")
                monTitre4.innerText = monObjet.trip_title;
                monArticle4.appendChild(monTitre4);
                let monImage4 = document.createElement("img");
                monImage4.setAttribute("src", "images/voyages/id4.jpg");
                let maDiv4 = document.createElement("div");
                monArticle4.appendChild(maDiv4);
                maDiv4.appendChild(monImage4);
                let monP4 = document.createElement("p");
                monP4.innerText = monObjet.trip_description.substr(0, 150);
                monArticle4.appendChild(monP4);
                let monButton4 = document.createElement("input");
                monButton4.setAttribute("type", "button");
                monButton4.value = "lire la suite";
                monArticle4.appendChild(monButton4);
                break;
            case 4:
                let monArticle5 = document.createElement("article");
                maSection.appendChild(monArticle5);
                let monTitre5 = document.createElement("h2")
                monTitre5.innerText = monObjet.trip_title;
                monArticle5.appendChild(monTitre5);
                let monImage5 = document.createElement("img");
                monImage5.setAttribute("src", "images/voyages/id5.jpg");
                let maDiv5 = document.createElement("div");
                monArticle5.appendChild(maDiv5);
                maDiv5.appendChild(monImage5);
                let monP5 = document.createElement("p");
                monP5.innerText = monObjet.trip_description.substr(0, 150);
                monArticle5.appendChild(monP5);
                let monButton5 = document.createElement("input");
                monButton5.setAttribute("type", "button");
                monButton5.value = "lire la suite";
                monArticle5.appendChild(monButton5);
                break;
            default:
                break
        }
    }
}



fetch("voyages.json")
.then(response => response.json())
.then(response => genererMesArticle(response))
.catch(error => alert ("Erreur ;" + error));