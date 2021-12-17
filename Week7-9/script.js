var buttons = document.querySelectorAll("button");
var form = document.querySelector("form");
var list = document.querySelector(".navList").querySelectorAll("li");
var games = document.querySelector(".gamesList");

buttons[0].onclick = planningScreen;
list[0].onclick = gamesList;
list[2].onclick = planningScreen;

function planningScreen () {
    form.style.display = "inline";
    buttons[0].style.display = "none";
    games.style.display = "none";
}

function gamesList () {
    buttons[0].style.display = "none";
    form.style.display = "none";
    games.style.display = "block";
}

form.addEventListener("submit", (event) => {
    event.preventDefault();
})