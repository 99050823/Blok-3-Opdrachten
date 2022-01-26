const deleteBttn = document.getElementById("delete"); 

deleteBttn.onclick = deleteFunc;

function deleteFunc () {
    const message = "Would you like to delete this record?";
    var conf = confirm(message);

    if (conf==true) {
        window.location.replace('PHP/delete.php');
    } else { 
        alert("ERROR"); 
    }
}

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
