var listEl = document.getElementById("plannedEl");

listEl.addEventListener("click", () => {
    const clearButton = document.getElementById('clear');

    clearButton.addEventListener('click', () => {
        alert("Records Deleted");
    }) 
})

if (window.history.replaceState) {
    window.history.replaceState( null, null, window.location.href );
}
