// Get the modal
var modal1 = document.getElementById('modalSABJ');
var modal2 = document.getElementById('modalABJ');
var modal3 = document.getElementById('modalTBA');
var modal4 = document.getElementById('modalLM');
var modal5 = document.getElementById('modalTAEYC');
var modal6 = document.getElementById('modalMHAT');

// Get the button that opens the modal
var btn1 = document.getElementById("btnSABJ");
var btn2 = document.getElementById("btnABJ");
var btn3 = document.getElementById("btnTBA");
var btn4 = document.getElementById("btnLM");
var btn5 = document.getElementById("btnTAEYC");
var btn6 = document.getElementById("btnMHAT");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn1.onclick = function() {
    modal1.style.display = "block";
}
btn2.onclick = function() {
    modal2.style.display = "block";
}
btn3.onclick = function() {
    modal3.style.display = "block";
}
btn4.onclick = function() {
    modal4.style.display = "block";
}
btn5.onclick = function() {
    modal5.style.display = "block";
}
btn6.onclick = function() {
    modal6.style.display = "block";
}

$('.close').click(function() {
	$(this).parents('.modal').hide();
});

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
    if (event.target == modal4) {
        modal4.style.display = "none";
    }
    if (event.target == modal5) {
        modal5.style.display = "none";
    }
    if (event.target == modal6) {
        modal6.style.display = "none";
    }
}