
let hamburger = document.getElementById("bars");
let navBar = document.getElementById("navbar");
let cancelSign = document.getElementById("cancel");

navBar.style.display = "none";

hamburger.addEventListener("click", showNav);

//function to display the navbar
function showNav() {
    navBar.style.display = "block";
}

cancelSign.addEventListener("click", hideNav);

//function to hide the navbar
function hideNav() {
    navBar.style.display = "none";
}