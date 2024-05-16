const stars = document.querySelectorAll(".star");

// Evento clic para cada estrella
stars.forEach(function (star, index) {
  star.addEventListener("click", function () {
    const rating = index + 1;
    const currentRating = parseInt(localStorage.getItem("rating"));

    if (rating === currentRating) {
      // Si la estrella clickeada es la más alta calificada, restablecer la calificación a 0
      localStorage.setItem("rating", 0);
      updateStarRating(0);
    } else {
      // De lo contrario, actualizar la calificación como de costumbre
      localStorage.setItem("rating", rating);
      updateStarRating(rating);
    }
  });

  // Evento hover para cada estrella
  star.addEventListener("mouseover", function () {
    // Iluminar todas las estrellas hasta la posición actual
    for (let i = 0; i <= index; i++) {
      stars[i].classList.add("hovered");
    }
  });

  star.addEventListener("mouseout", function () {
    // Remover la clase 'hovered' de todas las estrellas
    for (let i = 0; i < stars.length; i++) {
      stars[i].classList.remove("hovered");
    }
  });
});

// Función para actualizar la interfaz de usuario
function updateStarRating(rating) {
  // Recorrer todas las estrellas y eliminar checked
  for (let i = 0; i < stars.length; i++) {
    stars[i].classList.remove("checked");
  }

  // Agregar checked a las estrellas
  for (let i = 0; i < rating; i++) {
    stars[i].classList.add("checked");
  }

  // Mostrar la calificación en el elemento de la interfaz de usuario
  document.getElementById("rating").innerHTML = rating;

  // // Iluminar todas las estrellas hasta la calificación actual
  // for (let i = 0; i < rating; i++) {
  //   stars[i].classList.add("hovered");
  // }
}

// Si hay una calificación almacenada, actualizar la interfaz de usuario
// const storedRating = parseInt(localStorage.getItem("rating"));
// if (storedRating) {
//   updateStarRating(storedRating);
// }
