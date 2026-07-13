<?php

$paginaActual = $_GET['controller'] ?? 'index';

?>


<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>
        <?php echo isset($titulo) ? $titulo : 'Academia Excelencia'; ?>
    </title>


    <link rel="stylesheet" href="css/style.css">


</head>


<body>


<header class="encabezado">


    <nav class="navbar">


        <h2 class="logo">
            Academia Excelencia
        </h2>



        <ul class="menu">


            <li>

                <a 
                href="index.php?controller=index&action=index"
                class="<?= $paginaActual == 'index' ? 'activo' : '' ?>">

                    Inicio

                </a>

            </li>



            <li>

                <a 
                href="index.php?controller=cursos&action=index"
                class="<?= $paginaActual == 'cursos' ? 'activo' : '' ?>">

                    Cursos

                </a>

            </li>



            <li>

                <a 
                href="index.php?controller=profesores&action=index"
                class="<?= $paginaActual == 'profesores' ? 'activo' : '' ?>">

                    Profesores

                </a>

            </li>



            <li>

                <a 
                href="index.php?controller=contacto&action=index"
                class="<?= $paginaActual == 'contacto' ? 'activo' : '' ?>">

                    Contacto

                </a>

            </li>


        </ul>


    </nav>


</header>