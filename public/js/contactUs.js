function validateForm() {
  var x = document.forms["ContactForm"]["firstname"].value;
  if (x == "" || x == null) {
    alert("Name must be filled out");
    return false;
  }
};