// Get the modal
var modal_kgwd5 = document.getElementById("myModal-kawagad-5");

// Get the button that opens the modal
var btn_kgwd5 = document.getElementById("kagawad5-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-kagawad-5")[0];

// When the user clicks the button, open the modal 
btn_kgwd5.onclick = function() {
  modal_kgwd5.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal_kgwd5.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal_kgwd5) {
    modal_kgwd5.style.display = "none";
  }
}