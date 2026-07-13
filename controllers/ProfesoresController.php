<?php

require_once __DIR__ . '/../models/ProfesorModel.php';



class ProfesoresController
{

    private $model;



    public function __construct()
    {

        $this->model = new ProfesorModel();

    }




    public function index()
    {

        $profesores = $this->model->getAll();


        require_once __DIR__ . '/../views/profesores/index.php';

    }





    public function show($id)
    {

        $profesor = $this->model->getById($id);


        require_once __DIR__ . '/../views/profesores/show.php';

    }


}