function buscarMascota() {
  var input, filtro, animales, animal, nombre, i;
  input = document.getElementById("nombreMascota");
  filtro = input.value.toUpperCase();
  animales = document.getElementsByClassName("animal");
  for (i = 0; i < animales.length; i++) {
    animal = animales[i];
    nombre = animal.getElementsByTagName("h2")[0];
    if (nombre.innerHTML.toUpperCase().indexOf(filtro) > -1) {
      animal.style.display = "";
    } else {
      animal.style.display = "none";
    }
  }
}
