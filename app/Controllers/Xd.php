<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Xd extends BaseController
{
    public function index()
    {
        echo view('contenido/header');
        echo view('contenido/body');
        echo view('contenido/footer');
    }
}
