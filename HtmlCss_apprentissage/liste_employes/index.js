

let container = [];

function fillTable(_data){
  container = _data;
  let montab = document.querySelector("#liste");
  let monBody = montab.createTBody();
  monBody.setAttribute("id","monBody1");
  for (let i = 0; i < _data.length; i++) {
      let maligne = monBody.insertRow();
      let monObjet = _data[i];
      maligne.setAttribute("id", "ligne" + monObjet.employee_id);
   for (let i = 0; i < 6; i++) {
      switch (i) {
          case 0:
            let macellule= maligne.insertCell();
            macellule.innerText =  monObjet.employee_id;
            break;
          case 1:
            let macellule1= maligne.insertCell();
            macellule1.innerText  =  monObjet.employee_firstname + " " + monObjet.employee_lastname;
            break;
          case 2:
            let macellule2= maligne.insertCell();
            let maChaine = monObjet.employee_firstname; 
            macellule2.innerText = (maChaine.substring(0, 1)).toLowerCase() + "."+ monObjet.employee_lastname.toLowerCase() + "@email.com";
            break;
          case 3:
            let macellule3 = maligne.insertCell();
            let monCalcule = Math.round(monObjet.employee_salary/12*100)/100
            macellule3.innerText = monCalcule + " €";
            break;
          case 4:
            let macellule4 = maligne.insertCell();
            let maChaine2 = monObjet.employee_hiredate;
            macellule4.innerText = maChaine2.substring(0, 4);
            break;
          case 5:
            let maCelllule5 = maligne.insertCell();
            let buttonDuplicate = document.createElement("input");
            buttonDuplicate.setAttribute("type", "button") ;
            buttonDuplicate.setAttribute("class", "btn btn-outline-primary");
            buttonDuplicate.setAttribute("id", "monButtonDuplicate" + monObjet.employee_id);
            buttonDuplicate.value = "duplicate";
            maCelllule5.appendChild(buttonDuplicate);

            
            let buttonDelete = document.createElement("input");
            buttonDelete.setAttribute("type", "button");
            buttonDelete.setAttribute("class", "btn btn-outline-danger");
            buttonDelete.setAttribute("id", "monButtonDelete" + monObjet.employee_id);
            buttonDelete.value = "delete";
            maCelllule5.appendChild(buttonDelete);
            break;
          default:
            break;
      }
   } 

   document.querySelector("#monButtonDuplicate" + monObjet.employee_id).addEventListener("click", function(){
     let ligneClone = document.querySelector("#ligne" + monObjet.employee_id);
     let clone = ligneClone.cloneNode(true);
     clone.setAttribute("id", "clone" + monObjet.employee_id);
    //  console.log(clone);
     monBody.appendChild(clone);   
   });

   document.querySelector("#monButtonDelete" + monObjet.employee_id).addEventListener("click", function(){
      let deleteLigne = document.querySelector("#ligne" + monObjet.employee_id);
      deleteLigne.remove();
    });
  }

  let footer = montab.createTFoot();
  footer.setAttribute("id","footer1");
  let lastLigne = footer.insertRow();
  for (let i = 0; i <= 5; i++) {
    if (i == 0) {
      let total = _data.length
      let maCell = lastLigne.insertCell();
      maCell.innerText = total;
    } else if (i == 3){
      let somme = 0;
      for (let j = 0; j < _data.length; j++) {
        somme += _data[j].employee_salary;
        
      }
      let cellSomme = lastLigne.insertCell();
      cellSomme.innerText = somme + " €"
    }else{
      let cellVide = lastLigne.insertCell();
      cellVide.innerText = " ";
    }
  }
}

function trieCroissant(){
  let monContainer = container.sort((a, b) => a.employee_salary - b.employee_salary);
  return monContainer;
}

function trieDeCroissant(){
  let monContainer = container.sort((b, a) => a.employee_salary - b.employee_salary);
  return monContainer;
}

let btnDecroissant = document.querySelector("#trie")
btnDecroissant.addEventListener("click", function(){
  let reservoir = trieDeCroissant();
  let montab = document.querySelector("#monBody1");
  let montab2 = document.querySelector("#footer1");
  montab.remove();
  montab2.remove();
  fillTable(reservoir);
  // console.log(reservoir);
  
});

let btnCroissant = document.querySelector("#trie");
btnCroissant.addEventListener("dblclick", function(){
  let reservoir = trieCroissant();
  let montabBody = document.querySelector("#monBody1");
  let montabfoot = document.querySelector("#footer1");
  montabBody.remove();
  montabfoot.remove();

  
  fillTable(reservoir);
  
  
});









fetch("liste.json")
.then(response => response.json())
.then(response => console.log(response))
.catch(error => alert("Erreur ;" + error));








