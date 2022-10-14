function Calcul() {
    // document.querySelector("#nom Id") pour selectionner un id
    // Number(document.querySelector("#nom Id").value) pour transformer le type text en nombre
    document.querySelector("#prix1").value = Number(document.querySelector("#qte1").value) * Number(document.querySelector("#prixunitaire1").value);
    document.querySelector("#prix2").value = Number(document.querySelector("#qte2").value) * Number(document.querySelector("#prixunitaire2").value);
    document.querySelector("#total").value = Number(document.querySelector("#prix1").value) + Number(document.querySelector("#prix2").value);
}




// pour verifier si la saisie est bien des nombre
function control(_element_input) {
    let monControl = true;
    let chaine = _element_input.value;
    if(isNaN(chaine) && chaine.length>0)
    {
        
        alert( chaine + " : n'est pas valide");
        _element_input.value = "";
        _element_input.focus();
        monControl = false;
    }

    return monControl
}


// pour tout selectionner les input de type number
document.querySelectorAll("input[type=text]").forEach(item => {item.addEventListener("input", function (event) {

    if(control(item)==true){
        Calcul();
    } }) });




// document.querySelector("#qte1").addEventListener("blur", function(){
//     if(control("qte1") == true)
//     {
//         Calcul();
//     }
// })