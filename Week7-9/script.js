var buttons = document.querySelectorAll("button");
var planForm = document.querySelector(".planForm");
var list = document.querySelector(".navList").querySelectorAll("li");
var games = document.querySelector(".gamesList");
var planned = document.querySelector(".planned");

buttons[0].onclick = planningScreen;
list[0].onclick = gamesList;
list[1].onclick = plannedGames;
list[2].onclick = planningScreen;

function planningScreen () {
    planForm.style.display = "inline";
    buttons[0].style.display = "none";
    games.style.display = "none";
    planned.style.display = "none";
}

function plannedGames () {
    planned.style.display = "block";
    buttons[0].style.display = "none";
    planForm.style.display = "none";
    games.style.display = "none";
}

function gamesList () {
    buttons[0].style.display = "none";
    planForm.style.display = "none";
    games.style.display = "block";
    planned.style.display = "none";
}

if (window.history.replaceState) {
    window.history.replaceState( null, null, window.location.href );
}
