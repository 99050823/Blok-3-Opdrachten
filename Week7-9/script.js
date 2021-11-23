var buttonPopUp = document.getElementById("planButton");
var popUpScreen = document.getElementById("popUp");
var submitButton = document.getElementById("subBttn");
var page = document.querySelector('body');

var contentPopUp = document.querySelectorAll("[id=gamePopUp]");
var content = document.querySelectorAll('[name="content"]');

buttonPopUp.onclick = popUp;
submitButton.onclick = submit;

for (let i = 0; i < content.length; i++) {
    content[i].addEventListener('click', () => {
        
        for (let j = 0; j < contentPopUp.length; j++) {
            contentPopUp[j].style.display = "none";
        }
        contentPopUp[i].style.display = "block";
    })
}

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}

function submit() {
    window.location.reload();
}

function popUp() {

    if  (popUpScreen.style.display = "none") {
        popUpScreen.style.display = "block";
    } 

}

function exitButton () {
    if  (popUpScreen.style.display = "block") {
        popUpScreen.style.display = "none";
    } 
}

