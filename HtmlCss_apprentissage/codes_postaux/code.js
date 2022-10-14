
var mesData = [];


function genererListe(_data){

    mesData = _data;

    for (let i = 0; i < _data.length; i++) {
        let maCommune = _data[i];

        let monOption = new Option();

        monOption.value = maCommune.codeCommune;

        monOption.innerText = maCommune.nomCommune + " CP: " + maCommune.codePostal;
        document.querySelector("#codePostal").appendChild(monOption);
        
        
    }

}



fetch("ville.json")
.then(response => response.json())
.then(response => genererListe(response))
.catch(error => alert ("Erreur ;" + error));


let monBouton = document.querySelector("#choix");

monBouton.addEventListener("click", function(){
    let maSelection = document.querySelector("#cp").value;
    console.log(maSelection);
    // let boolTrouve = false;

    let objtRecheche = mesData.find(item => item.codeCommune == maSelection);
    // for (let i = 0; i < mesData.length; i++) {
    //     if( maSelection == mesData[i].codeCommune){
            
    //         boolTrouve = mesData[i];

    //         console.log(mesData[i]);

    //        break;
    //     }
        
    // }
    // if (boolTrouve != false) {

       
    // }
    document.querySelector("#ville").innerText += objtRecheche.libelleAcheminement;
})
