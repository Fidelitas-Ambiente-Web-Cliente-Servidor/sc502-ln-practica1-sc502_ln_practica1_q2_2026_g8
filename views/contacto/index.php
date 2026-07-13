<?php

$titulo = 'Contacto | Academia Excelencia';

require_once __DIR__ . '/../layout/header.php';

?>

<main>

    <section class="hero-cursos">

        <h1>Contáctenos</h1>

        <p>
            Si tiene alguna consulta sobre nuestros cursos o servicios,
            complete el siguiente formulario.
        </p>

    </section>

    <section class="contenido-contacto">

        <?php if (!empty($mensaje)): ?>

            <p>
                <?php echo $mensaje; ?>
            </p>

        <?php endif; ?>

        <form
            action="index.php?controller=contacto&action=index"
            method="POST"
        >

            <label for="nombre">
                Nombre completo
            </label>

            <input
                type="text"
                id="nombre"
                name="nombre"
                required
            >

            <label for="correo">
                Correo electrónico
            </label>

            <input
                type="email"
                id="correo"
                name="correo"
                required
            >

            <label for="telefono">
                Teléfono
            </label>

            <input
                type="text"
                id="telefono"
                name="telefono"
                required
            >

            <label for="asunto">
                Asunto
            </label>

            <input
                type="text"
                id="asunto"
                name="asunto"
                required
            >

            <label for="mensaje">
                Mensaje
            </label>

            <textarea
                id="mensaje"
                name="mensaje"
                rows="5"
                required
            ></textarea>

            <button type="submit">
                Enviar
            </button>

        </form>

    </section>

</main>

<?php

require_once __DIR__ . '/../layout/footer.php';

?>