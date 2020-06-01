function display() {
    var i;
    var modal = document.getElementsByClassName("modal");
    for (i = 0; i < modal.length; i++) {
        modal[i].style.display = "flex";  
    }
}
function hide() {
    var i;
    var modal = document.getElementsByClassName("modal");
    for (i = 0; i < modal.length; i++) {
        modal[i].style.display = "none";  
    }
}