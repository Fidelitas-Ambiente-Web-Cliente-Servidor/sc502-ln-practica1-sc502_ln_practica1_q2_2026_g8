<?php

require_once __DIR__ . '/../models/ContactoModel.php';

class ContactoController
{
    public function index()
    {
        $mensaje = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $nombre = trim($_POST['nombre']);
            $correo = trim($_POST['correo']);
            $telefono = trim($_POST['telefono']);
            $asunto = trim($_POST['asunto']);
            $mensajeTexto = trim($_POST['mensaje']);

            $contactoModel = new ContactoModel();

            if (
                $contactoModel->guardar(
                    $nombre,
                    $correo,
                    $telefono,
                    $asunto,
                    $mensajeTexto
                )
            ) {

                $mensaje = 'Mensaje enviado correctamente.';

            } else {

                $mensaje = 'Error al enviar el mensaje.';

            }
        }

        require_once __DIR__ . '/../views/contacto/index.php';
    }
}