$(document).ready(function () {
    $("#buscador-input").on("keyup", function () {
        var searchTerm = $(this).val();
        if (searchTerm.length >= 2) {
            //TODO FUNCIONA
            fetch("/searchDogGroomers", {
                method: "POST",
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                body: JSON.stringify({
                    search: searchTerm,
                }),
            })
                .then((response) => {
                    return response.json();
                })
                .then((data) => {
                    var filteredList = data.dogGroomersLista.filter((dogGroomer) => {
                        // Asegúrate de que dogGroomer y sus propiedades existen
                        if (dogGroomer && dogGroomer.name && dogGroomer.address) {
                            // Filtrar por nombre y dirección
                            return dogGroomer.name.toLowerCase().includes(searchTerm.toLowerCase()) ||
                                   dogGroomer.address.toLowerCase().includes(searchTerm.toLowerCase());
                        }
                        return false; // Devuelve false si no se cumplen las condiciones
                    });
                    
                    var html = "";
                    for (var i in filteredList) {
                        var enlace = '<div class="flex">' +
                            '<a href="/dogGroomerShow/' + filteredList[i].id + '" class="container-search">' +
                            '<img class="img-search" src="/storage/moduloServicios/images/dogGroomers/' + filteredList[i].img_ref + '" alt="Imagen del alojamiento" />' +
                            '<div class="container-search-text">' +
                                '<p class="texto-search bold">Pel. ' + filteredList[i].name + '</p>' +
                                '<p class="texto-search">' + filteredList[i].address + '</p>' +
                            '</div>' +
                            '</a>' +
                            '</div>';
                        html += enlace;
                    }
                    if (html.trim()!== "") {
                        $('#results').html(html);
                    }
                })
                .catch((error) => console.log(error));
        } else {
            $('#results').html("");
        }
    });
});
