<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Productos;
use App\Models\VentasModels;

class Ventas extends BaseController
{
    public function index()
    {
        $productos = new Productos();
        $allProductos = $productos->getAll();
        $data = array("productos" => $allProductos);
        return view('dashboard' , $data);
    }

    public function payProduct($id)
    {
        //Extrae solo un producto
		$idProd = $id;
		$productosModel = new Productos();
		$datosProd = $productosModel->getProductro($idProd);
        $dataSave =[
        "id" => "",
        "id_producto" => $datosProd[0]["id"],
        "costo_venta" => $datosProd[0]["precio_unidad"],
        "fecha_compra" => ""
        ];
		$ventasModel = new VentasModels();
        $ventasModel->insertData($dataSave);
        $datosProd = array("datosProd" => $datosProd , "dataSave" => $dataSave);
        return redirect('/', 'refresh');
    }
}
