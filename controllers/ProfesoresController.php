<?php

class ProfesoresController
{
    public function index()
    {
        require_once 'views/profesores/index.php';
    }

    public function show()
    {
        require_once 'views/profesores/show.php';
    }
}