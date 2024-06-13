<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Cnuevo extends BaseController
{
    public function index()
    {
        //
        $data = [
            "titulo" => "Calculator 3000",
        ];

        echo view ('Vistas_contenido/header');
        echo view ('Vistas_contenido/body');
        echo view ('Vistas_contenido/footer');
        
    }
}
