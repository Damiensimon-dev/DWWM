// filter pour rechercher les céreales.




function creerCellTitre(_valeur,_element)
{   
    let maCell = document.createElement("th");
    let montitre = document.createElement("label");
    montitre.setAttribute("id", "lbl" + _valeur); 
    montitre.innerText = _valeur;
    maCell.appendChild(montitre);
    _element.appendChild(maCell);

}


function fillTable(_data)
{
    
    let monTab = document.querySelector("#nutriment");
    let entete = monTab.createTHead();
    entete.setAttribute("id", "titre");
    let ligneTitre = entete.insertRow();

    
    for (var key in _data[0]) 
    {
        //creer une cellule et mettre la clé dedans et la rattacher a la ligne de titre.
        creerCellTitre(key, ligneTitre);
    }

    creerCellTitre("ns", ligneTitre);
    creerCellTitre("del", ligneTitre);

    let monBody = monTab.createTBody();
    monBody.setAttribute("id", "donnee");

    for (let i = 0; i < _data.length; i++) 
    {
      let maLigne = monBody.insertRow();
      maLigne.setAttribute("class", "test");
      let monObjet = _data[i];
      for (var key in _data[i]) 
      {
        let maCellule = maLigne.insertCell();
        maCellule.innerText = monObjet[key];
        maLigne.appendChild(maCellule);
      } 
        let ns = document.createElement("td"); 
        ns.classList.add("colorScore");
        ns.dataset.colorScore = nutriScore(monObjet.rating);
        // let lettreNutri = nutriScore(monObjet.rating);
        // if(lettreNutri == "A"){
        //   ns.setAttribute("style", "background-color:darkgreen");
        // }else if(lettreNutri == "B"){
        //   ns.setAttribute("style", "background-color:#009900")
        // }else if(lettreNutri == "C"){
        //   ns.setAttribute("style", "background-color:#CCCC00")
        // }else if(lettreNutri == "D"){
        //   ns.setAttribute("style", "background-color:#CC6600")
        // }else if(lettreNutri == "E"){
        //   ns.setAttribute("style", "background-color:#CC0000")
        // }
      
        ns.innerText = nutriScore(monObjet.rating);
        maLigne.appendChild(ns);
        
        let btnSuppr = document.createElement("td");
        btnSuppr.setAttribute("type", "button");
        btnSuppr.setAttribute("id", "monBtnSuppr" + monObjet.id);
        btnSuppr.classList.add("delete");
        btnSuppr.innerText = "X";
        maLigne.appendChild(btnSuppr);
        // console.log(btnSuppr);

    }
        // let monBtnSuppr =  document.querySelector("#monBtnSuprr");
        // monBtnSuppr.addEventListener("click", function(){
        // let supprLigne = document.querySelector(".test");
        // supprLigne.remove();
        // });
  
    
    let footer = monTab.createTFoot();
    footer.setAttribute("id", "footer")
    let lastLigne = footer.insertRow();
    for (let i = 0; i <=3 ; i++) { 
      if (i == 1) {
        let total = _data.length;
        let maCell = lastLigne.insertCell();
        maCell.innerText = total + " éléments";
      } else if (i == 2){
        let somme = 0;
        for (let j = 0; j < _data.length; j++) {
          somme += _data[j].calories;
          
        }
        somme = Math.round((somme *100)/_data.length )/ 100;
        
        let cellSomme = lastLigne.insertCell();
        cellSomme.innerHTML = "Moyenne <br/> calories <br/> " + somme 
      }else{
        let cellVide = lastLigne.insertCell();
        cellVide.innerText = " ";
      }
      
    }
}


function nutriScore(_cote){
  let nutri = ""
 if ( _cote > 80)
      nutri = "A";

    else if( _cote > 70 && _cote <= 80)
      nutri = "B";

    else if( _cote > 55 && _cote <= 70)
      nutri ="C";

    else if (_cote > 35 && _cote <= 55)
      nutri = "D";

    else if (_cote <= 35)
      nutri = "E";
    else
    nutri = "error"

    return nutri;
}




 function rechercheCereal(_name){
   
 }













fetch("donnee.json")
.then(response => response.json())
.then(response => fillTable(response))
.catch(error => alert ("Erreur ;" + error));