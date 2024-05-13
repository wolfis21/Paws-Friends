const stars = document.querySelectorAll(".star"); 

// Evento clic para cada estrella
stars.forEach(function (star, index) {
  star.addEventListener("click", function () {
    const rating = index + 1;
    const currentRating = parseInt(localStorage.getItem("rating"));

    if (rating === currentRating) {
      // If the clicked star is the highest rated star, reset the rating to 0
      localStorage.setItem("rating", 0);
      updateStarRating(0);
    } else {
      // Otherwise, update the rating as usual
      localStorage.setItem("rating", rating);
      updateStarRating(rating);
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

}

// Si hay una calificación almacenada, actualizar la interfaz de usuario
if (storedRating) {
  updateStarRating(storedRating);
}

stars = document.querySelectorAll('.star').forEach(star => {
  stars.addEventListener('mouseover', function() {
      document.querySelectorAll('.star').forEach(otherStar => {
          if (otherStar!== this) {
              otherStar.classList.add('hovered');
          }
      });
  });

  stars.addEventListener('mouseout', function() {
      document.querySelectorAll('.star').forEach(otherStar => {
          otherStar.classList.remove('hovered');
      });
  });
});