<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Productos;

class Landing extends BaseController
{
    public function index()
    {
        $Productos = new Productos();
        $allProductos = $Productos->getAll();
        $getMarca = $Productos->getMarca();
        $getTipo = $Productos->getTipo();
        $getGrupo = $Productos->getGrupo();
        $data = array(
            "productos" => $allProductos,
            "marca" => $getMarca,
            "tipo" => $getTipo,
            "grupo" => $getGrupo
        );
        return view('tienda/landing' , $data);
    }
}
