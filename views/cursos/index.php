<?php

$titulo = 'Cursos | Academia Excelencia';

require_once __DIR__ . '/../layout/header.php';

?>

<main>

    <section class="hero-cursos">

        <h1>
            Catálogo de Cursos
        </h1>

        <p>
            Explora nuestra oferta académica y desarrolla habilidades
            profesionales con programas actualizados y de alta calidad.
        </p>

    </section>


    <section class="busqueda">

        <form action="index.php" method="GET">

            <input
                type="hidden"
                name="controller"
                value="cursos"
            >

            <input
                type="hidden"
                name="action"
                value="index"
            >

            <label for="categoria">
                Filtrar por categoría:
            </label>

            <select
                id="categoria"
                name="categoria"
            >

                <option value="">
                    Todas las categorías
                </option>

                <option
                    value="Desarrollo Web"
                    <?php
                    if ($categoria === 'Desarrollo Web') {
                        echo 'selected';
                    }
                    ?>
                >
                    Desarrollo Web
                </option>

                <option
                    value="Bases de Datos"
                    <?php
                    if ($categoria === 'Bases de Datos') {
                        echo 'selected';
                    }
                    ?>
                >
                    Bases de Datos
                </option>

            </select>

            <button type="submit">
                Filtrar
            </button>

            <?php if ($categoria !== ''): ?>

                <a href="index.php?controller=cursos&action=index">
                    Mostrar todos
                </a>

            <?php endif; ?>

        </form>

    </section>


    <section class="categoria">

        <h2>

            <?php if ($categoria !== ''): ?>

                Cursos de
                <?php
                echo htmlspecialchars(
                    $categoria,
                    ENT_QUOTES,
                    'UTF-8'
                );
                ?>

            <?php else: ?>

                Todos los cursos

            <?php endif; ?>

        </h2>


        <div class="cursos-grid">

            <?php if (!empty($cursos)): ?>

                <?php foreach ($cursos as $curso): ?>

                    <article class="curso-card">

                        <img
                            src="<?php
                            echo htmlspecialchars(
                                $curso['imagen'],
                                ENT_QUOTES,
                                'UTF-8'
                            );
                            ?>"

                            alt="<?php
                            echo htmlspecialchars(
                                $curso['nombre'],
                                ENT_QUOTES,
                                'UTF-8'
                            );
                            ?>"
                        >

                        <div class="curso-contenido">

                            <h3>
                                <?php
                                echo htmlspecialchars(
                                    $curso['nombre'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                );
                                ?>
                            </h3>

                            <p>
                                <?php
                                echo htmlspecialchars(
                                    $curso['descripcion'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                );
                                ?>
                            </p>

                            <p>
                                <strong>
                                    Categoría:
                                </strong>

                                <?php
                                echo htmlspecialchars(
                                    $curso['categoria'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                );
                                ?>
                            </p>

                            <p>
                                <strong>
                                    Duración:
                                </strong>

                                <?php
                                echo htmlspecialchars(
                                    $curso['duracion'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                );
                                ?>
                            </p>

                            <p>
                                <strong>
                                    Precio:
                                </strong>

                                ₡<?php
                                echo number_format(
                                    $curso['precio'],
                                    0,
                                    ',',
                                    '.'
                                );
                                ?>
                            </p>

                            <button type="button">
                                Ver más
                            </button>

                        </div>

                    </article>

                <?php endforeach; ?>

            <?php else: ?>

                <div class="sin-resultados">

                    <p>
                        No se encontraron cursos para la categoría
                        seleccionada.
                    </p>

                    <a href="index.php?controller=cursos&action=index">
                        Ver todos los cursos
                    </a>

                </div>

            <?php endif; ?>

        </div>

    </section>

</main>

<?php

require_once __DIR__ . '/../layout/footer.php';

?>