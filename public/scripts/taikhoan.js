var button1 = document.getElementById("mot");
var button2 = document.getElementById("hai");
var form1 = document.getElementById("form1");
var form2 = document.getElementById("form2");

button1.addEventListener("click", showform1, false);
button2.addEventListener("click", showform2, false);

function showform1() {
    alert("ahihi");
    form1.style.display = "block";
    form2.style.display = "none";
}
function showform2() {
    alert("ahihi2");
    form2.style.display = "block";
    form1.style.display = "none";
}