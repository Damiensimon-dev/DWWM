const rouge = document.querySelector("#rouge");
const vert = document.querySelector("#vert");
const bleu = document.querySelector("#bleu");
const btnrouge = document.querySelector("#button1");
const btnvert = document.querySelector("#button2");
const btnbleu = document.querySelector("#button3");



function getColor() 
{
    let chainecouleur="#"+rouge.value + vert.value + bleu.value;
    document.body.setAttribute("style","background-color:"+chainecouleur ); 
    //document.body.style.backgroundColor()
}


btnrouge.addEventListener("click", function () {

    rouge.value="ff";
    vert.value="00";
    bleu.value="00";
    getColor();

});

btnvert.addEventListener("click", function () {

    rouge.value ="00";
    vert.value ="ff";
    bleu.value ="00";
    getColor();

});

btnbleu.addEventListener("click", function () {

    rouge.value ="00";
    vert.value ="00";
    bleu.value ="ff";
    getColor();

});




// rouge.addEventListener("change", function () {

//     document.querySelector("#rouge").value ="";
//     document.querySelector("#vert").value ="";
//     document.querySelector("#bleu").value ="";
//     getColor();

// });




//let button1 = document.querySelector('#button1');
// let button2 = document.querySelector('#button2');
// let button3 = document.querySelector('#button3');


// button1.addEventListener('click', function() {
 
//     document.body.style.background = "#FF0000";
    
   
// });

// button2.addEventListener('click', function() {

//     document.body.style.background = "#008000"

// })

// button3.addEventListener('click', function() {

//     document.body.style.background = "#0000FF"

// })
