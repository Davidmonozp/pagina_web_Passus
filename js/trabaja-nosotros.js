document.addEventListener('DOMContentLoaded', function() {
    const inputBusqueda = document.getElementById('busqueda-cargo');
    const btnBuscar = document.getElementById('btn-buscar');
    const vacantes = document.querySelectorAll('.services_col_oferta');
    const alertMessage = document.getElementById('alert-message');
    const alertText = document.getElementById('alert-text');
    const closeAlertButton = document.getElementById('close-alert');

    function removerTildes(texto) {
        return texto.normalize('NFD').replace(/[\u0300-\u036f]/g, '');
    }

    function mostrarTodasLasVacantes() {
        // Mostrar todas las vacantes sin ningún filtro
        vacantes.forEach(vacante => {
            vacante.style.display = 'block';
        });
    }

    btnBuscar.addEventListener('click', function() {
        const terminoBusqueda = removerTildes(inputBusqueda.value.toLowerCase());
        let resultsFound = false; // Para verificar si encontramos resultados

        vacantes.forEach(vacante => {
            const tituloCargo = removerTildes(vacante.querySelector('.services_title_oferta').textContent.toLowerCase());

            // Muestra o oculta las vacantes en función de la búsqueda
            if (terminoBusqueda === '') { 
                vacante.style.display = 'block'; // Muestra todas las vacantes si el campo está vacío
            } else if (tituloCargo.includes(terminoBusqueda)) {
                vacante.style.display = 'block'; // Muestra la vacante si coincide con el término de búsqueda
                resultsFound = true; // Encontramos al menos una vacante
            } else {
                vacante.style.display = 'none'; // Oculta la vacante si no coincide
            }
        });

        // Mostrar el alert si no hay resultados
        if (!resultsFound && terminoBusqueda !== '') {
            alertMessage.style.display = 'block'; // Mostrar el alert
        } else {
            alertMessage.style.display = 'none'; // Ocultar el alert si se encuentran resultados
        }
    });

    // Cerrar el alert cuando se haga clic en el botón y borrar el input
    closeAlertButton.addEventListener('click', function() {
        alertMessage.style.display = 'none'; // Ocultar el alert
        inputBusqueda.value = ''; // Borrar el valor del input de búsqueda
        mostrarTodasLasVacantes(); // Mostrar todas las vacantes nuevamente
    });

    // Mostrar todas las vacantes cuando se borre la búsqueda o cierre el modal
    inputBusqueda.addEventListener('input', function() {
        if (inputBusqueda.value === '') {
            mostrarTodasLasVacantes(); // Si el campo de búsqueda está vacío, mostrar todas las vacantes
            alertMessage.style.display = 'none'; // Ocultar el alert si se borra la búsqueda
        }
    });
});







