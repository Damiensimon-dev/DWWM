function creerCellTitre(_valeur,_element)
{
    let maCell = document.createElement("th");
    maCell.innerText = _valeur;
    _element.appendChild(maCell);
}


function fillTable(_data)
{
    let monTab = document.querySelector("#jeu");
    let entete = monTab.createTHead();
    let ligneTitre = entete.insertRow();

    
    for (var key in _data[0]) 
    {
        //creer une cellule et mettre la clé dedans et la rattacher a la ligne de titre.
        creerCellTitre(key, ligneTitre);
    }

    let monBody = monTab.createTBody();

    for (let i = 0; i < _data.length; i++) 
    {
      let maLigne = monBody.insertRow();
      let monObjet = _data[i];
      for (var key in _data[i]) 
      {
        let maCellule = maLigne.insertCell();
        maCellule.innerText = monObjet[key];
        maLigne.appendChild(maCellule);
      }  
        
    }
}

function rechercherMaxAttaque(_data)
{
    let max = _data[0].attack;
    let numCarte = _data[0].id;
    
    console.log(max);
    for (let i = 0; i < _data.length; i++) {
        let monObjet = _data[i];
        
        if (monObjet.attack > max) {
            max = monObjet.attack;

            numCarte = monObjet.id
        }
        
    }

    return _data[numCarte-1];
}

function rechercherMaxDefense(_data)
{
    let max = _data[0].armor;
    let numCarte = _data[0].id;
    console.log(max);
    for (let i = 0; i < _data.length; i++) {
        let monObjet = _data[i];

        if (monObjet.armor > max) {
            max = monObjet.armor;

            numCarte = monObjet.id
        }
        
    }
    return _data[numCarte-1];
}

function rechercherMaxPartieFaite(_data)
{
    let max = _data[0].played;
    let numCarte = _data[0].id;
    console.log(max);
    for (let i = 0; i < _data.length; i++) {
        let monObjet = _data[i];

        if (monObjet.played > max) {
            max = monObjet.played;

            numCarte = monObjet.id
        }
        
    }
    return _data[numCarte-1];
}

function rechercherMaxVictoire(_data)
{
    let max = _data[0].victory;
    let numCarte = _data[0].id;
    console.log(max);
    for (let i = 0; i < _data.length; i++) {
        let monObjet = _data[i];

        if (monObjet.victory > max) {
            max = monObjet.victory;

            numCarte = monObjet.id
        }
        
    }
    return _data[numCarte-1];
}





// function addCell(_valeur,_ligne)
// {
//     var newCell = _ligne.insertCell();
//     newCell.innerText = _valeur;
// }


// function genererTableauCarte(_tableauCarte){
    

//     for(let i = 0; i < _tableauCarte.length;i++ ){

//         let maLigne = document.querySelector("#tabCarte").insertRow();

//         let ligne = _tableauCarte[i];
//         for (var key in ligne) {
//             addCell(ligne[key], maLigne);
//           console.log(ligne[key]);
//         }
//     }
        
        // if(i == 0){
        //     let monTr = document.createElement("tr");
        //     monTr.setAttribute("class","monTrDonnee");

        //     let monTd = document.createElement("td");
        //     monTd.innerText = monTableau.id;
        //     monTr.appendChild(monTd);

        //     let monTdName = document.createElement("td");
        //     monTdName.innerText = monTableau.name;
        //     monTr.appendChild(monTdName)

        //     let monTdLevel = document.createElement("td");
        //     monTdLevel.innerText = monTableau.level;
        //     monTr.appendChild(monTdLevel);

        //     let monTdPower = document.createElement("td");
        //     monTdPower.innerText = monTableau.power;
        //     monTr.appendChild(monTdPower);
            
        //     let monTdAttack = document.createElement("td");
        //     monTdAttack.innerText = monTableau.attack;
        //     monTr.appendChild(monTdAttack);

        //     let monTdArmor = document.createElement("td");
        //     monTdArmor.innerText = monTableau.armor;
        //     monTr.appendChild(monTdArmor);

        //     let monTdDamage = document.createElement("td");
        //     monTdDamage.innerText = monTableau.damage;
        //     monTr.appendChild(monTdDamage)

        //     document.querySelector(".tabCarte").appendChild(monTr)
        // }
        // else
        // {
        //     let monTr = document.createElement("tr");
        //     monTr.setAttribute("class","monTrDonnee");

        //     let monTd = document.createElement("td");
        //     monTd.innerText = monTableau.id;
        //     monTr.appendChild(monTd);
            
        //     let monTdName = document.createElement("td");
        //     monTdName.innerText = monTableau.name;
        //     monTr.appendChild(monTdName)

            
        //     let monTdLevel = document.createElement("td");
        //     monTdLevel.innerText = monTableau.level;
        //     monTr.appendChild(monTdLevel);

            
        //     let monTdPower = document.createElement("td");
        //     monTdPower.innerText = monTableau.power;
        //     monTr.appendChild(monTdPower);

        //     let monTdAttack = document.createElement("td");
        //     monTdAttack.innerText = monTableau.attack;
        //     monTr.appendChild(monTdAttack);

        //     let monTdArmor = document.createElement("td");
        //     monTdArmor.innerText = monTableau.armor;
        //     monTr.appendChild(monTdArmor);

        //     let monTdDamage = document.createElement("td");
        //     monTdDamage.innerText = monTableau.damage;
        //     monTr.appendChild(monTdDamage)

        //     document.querySelector(".tabCarte").appendChild(monTr)
        // }
// }

const btnAttaque = document.querySelector("#btn_attaque");
const btnDefense = document.querySelector("#btn_defense");
const btnPartieFaite = document.querySelector("#btn_partieFaite");
const btnPlusVictoire = document.querySelector("#btn_plusVictoire");
const btnReset = document.querySelector("#btn_reset");


let xhr = new XMLHttpRequest();
xhr.open("GET", "carte.json", true);
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
    fillTable(data);
    // console.log(rechercherMaxAttaque(data));
    btnAttaque.addEventListener("click", function() {
        let objMax = rechercherMaxAttaque(data)
        document.getElementById("nom").innerText = objMax.name;
        document.querySelector("#attack").innerText = objMax.attack;
        document.querySelector("#played").innerText = objMax.played;
        document.querySelector("#victories").innerText = objMax.victory;
        document.querySelector("#defense").innerText = objMax.armor;
        document.querySelector("#power").innerText = objMax.power;
    })

    btnDefense.addEventListener("click", function(){
        let objMax = rechercherMaxDefense(data)
        document.querySelector("#nom").innerText = objMax.name;
        document.querySelector("#defense").innerText = objMax.armor;
        document.querySelector("#played").innerText = objMax.played;
        document.querySelector("#victories").innerText = objMax.victory;
        document.querySelector("#attack").innerText = objMax.attack;
        document.querySelector("#power").innerText = objMax.power;
    })

    btnPartieFaite.addEventListener("click", function(){
        let objMax = rechercherMaxPartieFaite(data)
        document.querySelector("#nom").innerText = objMax.name;
        document.querySelector("#defense").innerText = objMax.armor;
        document.querySelector("#played").innerText = objMax.played;
        document.querySelector("#victories").innerText = objMax.victory;
        document.querySelector("#attack").innerText = objMax.attack;
        document.querySelector("#power").innerText = objMax.power;
    })

    btnPlusVictoire.addEventListener("click", function(){
        let objMax = rechercherMaxVictoire(data)
        document.querySelector("#nom").innerText = objMax.name;
        document.querySelector("#defense").innerText = objMax.armor;
        document.querySelector("#played").innerText = objMax.played;
        document.querySelector("#victories").innerText = objMax.victory;
        document.querySelector("#attack").innerText = objMax.attack;
        document.querySelector("#power").innerText = objMax.power;
    })

    btnReset.addEventListener("click", function(){
        document.querySelector("#nom").innerText = "CHARACTER"
        document.querySelector("#played").innerText = "0"
        document.querySelector("#defense").innerText = "0";
        document.querySelector("#victories").innerText = "0";
        document.querySelector("#attack").innerText = "0";
        document.querySelector("#power").innerText = "0";
    })

   }
};

// function power() {
//     let power = document.createElement("input");
//     power.setAttribute("type","button");
//     power.value = "La carte possédant le plus de power";
//     let body = document.querySelector("#body");
//     body.appendChild(power);
// } power();


// function attack() {
//     let Attack = document.createElement("input");
//     Attack.setAttribute("type","button");
//     Attack.value = "La carte possédant le plus d'Attack";
//     let body = document.querySelector("#body");
//     body.appendChild(Attack);
// } attack();

// function defense() {
//     let defense = document.createElement("input");
//     defense.setAttribute("type","button");
//     defense.value = "La carte possédant le plus de défense";
//     let body = document.querySelector("#body");
//     body.appendChild(defense);
// } defense();

















