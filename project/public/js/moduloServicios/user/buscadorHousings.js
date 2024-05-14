$(document).ready(function () {
    $("#buscador-input").on("keyup", function () {
        var searchTerm = $(this).val();
        if (searchTerm.length >= 2) {
            //TODO FUNCIONA
            fetch("/searchHousings", {
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
                    var filteredList = data.housingsLista.filter(
                        (housings) =>
                            housings &&
                            housings.name &&
                            housings.name
                                .toLowerCase()
                                .includes(searchTerm.toLowerCase())
                    );
                    var html = "";
                    for (var i in filteredList) {
                        var enlace = '<div class="flex">' +
                            '<a href="/housingShow/' + filteredList[i].id + '" class="container-search">' +
                            '<img class="img-search" src="/storage/moduloServicios/images/housings/' + filteredList[i].img_ref + '" alt="Imagen del alojamiento" />' +
                            '<div class="container-search-text">' +
                                '<p class="texto-search bold">Alo. ' + filteredList[i].name + '</p>' +
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
