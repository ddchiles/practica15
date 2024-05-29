<?php
function calcularVolumenes() {
    // Volumen de la Tierra en kilómetros cúbicos (km³)
    $volumenTierra = 1.083e12;

    // Calculamos el volumen de la Luna
    $volumenLuna = 8.94e22 / 5518;

    // Calculamos el volumen del Sol
    $volumenSol = 1.99e30 / 5518;

    // Mostramos los resultados en el HTML
    mostrarResultados($volumenLuna, $volumenSol);
}

function mostrarResultados($volumenLuna, $volumenSol) {
    echo "<div id='resultados'>
        <p>Para tener la misma densidad que la Tierra:</p>
        <p>Volumen de la Luna: " . number_format($volumenLuna, 2, '.', ',') . " m³</p>
        <p>Volumen del Sol: " . number_format($volumenSol, 2, '.', ',') . " m³</p>
    </div>";
}

// Llamamos a la función para calcular y mostrar los volúmenes
calcularVolumenes();
?>
