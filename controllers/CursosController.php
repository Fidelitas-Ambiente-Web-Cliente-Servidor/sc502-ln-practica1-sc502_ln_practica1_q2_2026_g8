<?php

require_once __DIR__ . '/../models/CursoModel.php';

class CursosController
{
    public function index()
    {
        $cursoModel = new CursoModel();

        $categoria = isset($_GET['categoria'])
            ? trim($_GET['categoria'])
            : '';

        if ($categoria !== '') {
            $cursos = $cursoModel->getByCategoria($categoria);
        } else {
            $cursos = $cursoModel->getAll();
        }

        require_once __DIR__ . '/../views/cursos/index.php';
    }
}