$(document).ready(function () {
    $("#buscador-input").on("keyup", function () {
        var searchTerm = $(this).val();
        if (searchTerm.length >= 2) {
            //TODO FUNCIONA
            fetch("/searchVeterinario", {
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
                    var filteredList = data.veterinariosLista.filter(
                        (veterinarian) =>
                            veterinarian &&
                            veterinarian.name &&
                            veterinarian.name
                                .toLowerCase()
                                .includes(searchTerm.toLowerCase())
                    );
                    var html = "";
                    for (var i in filteredList) {
                        var enlace = '<div class="flex">' +
                            '<a href="/VeterinarioShow/' + filteredList[i].id + '" class="container-search">' +
                            '<img class="img-search" src="/storage/moduloServicios/images/vets/' + filteredList[i].img_ref + '" alt="Imagen del veterinario" />' +
                            '<div class="container-search-text">' +
                                '<p class="texto-search bold">Dr. ' + filteredList[i].name + '</p>' +
                                '<p class="texto-search">' + filteredList[i].specialist_animals + '</p>' +
                            '</div>' +
                            '</a>' +
                            // '<hr>' +
                            '</div>';
                        html += enlace;
                    }
                     $('#results').html(html);
                })
                .catch((error) => console.log(error));
        } 
    });
});
