<?php

echo '<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <title> Cursos destacados</title>
    
</head>
<body>
      <main>
      <h2>Cursos destacados</h2>
      <div class="cursos-grid">';

if ($empty($cursosDestacados)) {
    foreach ($cursosDestacados as $curso) {

        echo '<div class="curso-card">';
        echo '<h3>' . htmlspecialchars($curso['nombre']) . '</h3>';
        echo '<p>' . htmlspecialchars($curso['descripcion']) . '</p>';
        echo '<p> ' . htmlspecialchars($curso['precio']) . '</p>';
        echo '<button>Ver más</button>';
        echo '</div>';
    }

} else {
    echo '<p>No hay cursos destacados disponibles.</p>';
}
echo '</div>

</main>

</body>

</html>';
    