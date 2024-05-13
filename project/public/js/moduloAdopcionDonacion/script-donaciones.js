function buscarDonadores() {
  var input, filter, donadores, donador, i, txtValue;
  input = document.getElementById("nombreDonadores");
  filter = input.value.toUpperCase();
  donadores = document.getElementsByClassName("donador");
  for (i = 0; i < donadores.length; i++) {
    donador = donadores[i];
    txtValue = donador.textContent || donador.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      donador.style.display = "";
    } else {
      donador.style.display = "none";
    }
  }
}
