let qte1 = 0;
let prixunitaire1 = 0;
let prix1 = 0;

let quantité1 = document.getElementById("qte1");
let prixUni1 = document.getElementById("prixunitaire1");
let prixtotal1 = document.getElementById("prix1");

let qte2 = 0;
let prixunitaire2 = 0;
let prix2 = 0;

let quantité2 = document.getElementById("qte2");
let prixUni2 = document.getElementById("prixunitaire2");
let prixtotal2 = document.getElementById("prix2");

let total = 0;

let calcultotal = document.getElementById("total");



quantité1.addEventListener("input", function(event){
    qte1 = event.target.value;
    event.target.value = qte1;
    prix1 = qte1 * prixunitaire1;
    prixtotal1.value = prix1;
    total = prix1 + prix2;
    calcultotal.value = total;
    
});

prixUni1.addEventListener("input", function(event) {
    prixunitaire1 = event.target.value;
    event.target.value = prixunitaire1;
    prix1 = qte1 * prixunitaire1;
    prixtotal1.value = prix1;
    total = prix1 + prix2;
    calcultotal.value = total;
})

quantité2.addEventListener("input", function(event){
    qte2 = event.target.value;
    event.target.value = qte2;
    prix2 = qte2 * prixunitaire2;
    prixtotal2.value = prix2;
    total = prix1 + prix2;
    calcultotal.value = total;
});

prixUni2.addEventListener("input", function(event) {
    prixunitaire2 = event.target.value;
    event.target.value = prixunitaire2;
    prix2 = qte2 * prixunitaire2;
    prixtotal2.value = prix2;
    total = prix1 + prix2;
    calcultotal.value = total;
})



 