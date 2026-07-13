<?php

declare(strict_types=1);

require_once 'IndexModel.php';

class IndexController {
    public function index(): void {
        $model = new IndexModel();
        $cursosDestacados = $model->getAll();

        require_once 'index.php';
    }


}