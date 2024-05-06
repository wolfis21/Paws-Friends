document.addEventListener('DOMContentLoaded', function() {
    const search = document.querySelector('.input-group input'),
        table_rows = document.querySelectorAll('tbody tr'),
        motivo_heading = document.querySelector('thead th:nth-child(6)');

    search.addEventListener('input', searchTable);

    motivo_heading.addEventListener('click', () => {
        const sort_asc = !motivo_heading.classList.contains('asc');
        sortTable(2, sort_asc);
        motivo_heading.classList.toggle('asc', sort_asc);
    });

    const pdf_btn = document.querySelector('#toPDF');
    const historial_table = document.querySelector('#HISTORIAL');

    pdf_btn.onclick = () => {
        toPDF(historial_table);
    };

    function searchTable() {
        table_rows.forEach((row, i) => {
            let table_data = row.textContent.toLowerCase(),
                search_data = search.value.toLowerCase();

            row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
            row.style.setProperty('--delay', i / 25 + 's');
        });

        document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
            visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
        });
    }

    function sortTable(column, sort_asc) {
        [...table_rows].sort((a, b) => {
            let first_row = a.querySelectorAll('td')[column].textContent.toLowerCase(),
                second_row = b.querySelectorAll('td')[column].textContent.toLowerCase();

            return sort_asc ? (first_row < second_row ? -1 : 1) : (first_row < second_row ? 1 : -1);
        })
            .map(sorted_row => document.querySelector('tbody').appendChild(sorted_row));
    }

    function toPDF(historial) {
        const html_code = `
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Historial</title>
            <link rel="stylesheet" type="text/css" href="public/css/stylehc.css">
        </head>
        <body>
            <main class="table" id="HISTORIAL">${historial.innerHTML}</main>
        </body>
        </html>`;

        const new_window = window.open();
        new_window.document.write(html_code);

        setTimeout(() => {
            new_window.print();
            new_window.close();
        }, 400);
    }
});

pdf_btn.onclick = () => {
    toPDF(historial_table);
}
