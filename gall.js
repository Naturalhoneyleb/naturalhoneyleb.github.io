< script >
    var galcontent1 = document.getElementById("galcontent1");
var galcontent2 = document.getElementById("galcontent2");
var galcontent3 = document.getElementById("galcontent3");
var galbtn1 = document.getElementById("galbtn1");
var galbtn2 = document.getElementById("galbtn2");
var galbtn3 = document.getElementById("galbtn3");

function openCTNH1() {
    galcontent1.style.transform = "translateX(0px)";
    galcontent2.style.transform = "translateX(150%)";
    galcontent3.style.transform = "translateX(150%)";
}

function openCTN2() {
    galcontent1.style.transform = "translateX(150%)";
    galcontent2.style.transform = "translateX(0)";
    galcontent3.style.transform = "translateX(150%)";
}

function openCTN3() {
    galcontent1.style.transform = "translateX(150%)";
    galcontent2.style.transform = "translateX(150%)";
    galcontent3.style.transform = "translateX(0)";
} <
/script>