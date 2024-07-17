// Get the modal
var modal_kgwd7 = document.getElementById("myModal-kawagad-7");

// Get the button that opens the modal
var btn_kgwd7 = document.getElementById("kagawad7-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-kagawad-7")[0];

// When the user clicks the button, open the modal 
btn_kgwd7.onclick = function() {
  modal_kgwd7.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal_kgwd7.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal_kgwd7) {
    modal_kgwd7.style.display = "none";
  }
}