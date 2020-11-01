
let html_css = document.querySelectorAll("#html_css");
let python = document.querySelectorAll("#python");
let javascript = document.querySelectorAll("#javascript");
let php_mysql = document.querySelectorAll("#php_mysql");



function filterSelection(filter) {
    var x;
    currentDisplay = document.querySelectorAll("." + filter );
    filterDiv = document.querySelectorAll(".filterDiv");
    for (x =0; x < filterDiv.length; x++) {
        filterDiv[x].style.display = "none";
    }
    for (x =0; x < currentDisplay.length; x++) {
        currentDisplay[x].style.display = "inline-block";
    }
}