<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Productos;

class ProductosController extends BaseController
{
    public function index()
    {
        //Tabla de los productos de la tienda
        
    }
    public function aProduct()
    {
        //Extrae solo un producto
		$idProd = $this->request->getPost('busqueda');
		$productosModel = new Productos();
		$datosProd = $productosModel->getProductro($idProd);
		return $this->response->setJSON(array("status" => 1 , "prod" => $idProd, "datosProd" => $datosProd));
    }
    public function modificar()
    {
        //Modifica el producto a partir del ID
		/*
        $idProd = $this->request->getPost('busqueda');
		$datosProd = $productosModel->getProductro($idProd);
        */
		$productosModel = new Productos();
        $id = $_POST["id"];
        $data =[
            "codigo" => $_POST["codigo"],
            "nombre" => $_POST["nombre"],
            "marca" => $_POST["marca"],
            "tipo" => $_POST["tipo"],
            "grupo" => $_POST["grupo"],
            "peso" => $_POST["peso"],
            "precio_unidad" => $_POST["precio_unidad"],
            "stock" => $_POST["stock"],
            "status" => $_POST["status"]
            ];
        $change = $productosModel->updateById($id, $data);
		return $this->response->setJSON(array("status" => 1 , "datosProd" => $change));
    }
    public function nuevo()
    {
        //Nuevo producto
		/*
        $idProd = $this->request->getPost('busqueda');
		$datosProd = $productosModel->getProductro($idProd);
        */
		$productosModel = new Productos();
        $data =[
            "codigo" => $_POST["codigo"],
            "nombre" => $_POST["nombre"],
            "marca" => $_POST["marca"],
            "tipo" => $_POST["tipo"],
            "grupo" => $_POST["grupo"],
            "peso" => $_POST["peso"],
            "precio_unidad" => $_POST["precio_unidad"],
            "stock" => $_POST["stock"],
            "imagen" => $_POST["imagen"],
            "status" => $_POST["status"]
            ];
        $change = $productosModel->insertData($data);
		return $this->response->setJSON(array("status" => 1 , "datosProd" => $change));
    }
    public function l_page()
    {
        //Extrae solo un producto
		$productosModel = new Productos();
		$datosProd = $productosModel->searchProducts();
		return $this->response->setJSON(array("status" => 1 , "prod" => $datosProd));
    }

    public function buyProducto($id)
    {
        //Extrae solo un producto
		$idProd = $id;
		$productosModel = new Productos();
		$datosProd = $productosModel->getProductro($idProd);
        $datosProd = array("datosProd" => $datosProd);
        return view('tienda/unProducto' , $datosProd);
    }
}
