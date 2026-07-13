<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        <?php echo isset($titulo) ? $titulo : 'Academia Excelencia'; ?>
    </title>

    <link
    rel="stylesheet"
    href="/sc502-ln-practica1-sc502_ln_practica1_q2_2026_g8/css/cursos.css">
</head>

<body>

<header class="encabezado">

    <nav class="navbar">

        <h2 class="logo">
            Academia Excelencia
        </h2>

        <ul class="menu">

            <li>
                <a href="index.php?controller=index&action=index">
                    Inicio
                </a>
            </li>

            <li>
                <a
                    href="index.php?controller=cursos&action=index"
                    class="activo"
                >
                    Cursos
                </a>
            </li>

            <li>
                <a href="index.php?controller=profesores&action=index">
                    Profesores
                </a>
            </li>

            <li>
                <a href="index.php?controller=contacto&action=index">
                    Contacto
                </a>
            </li>

        </ul>

    </nav>

</header>