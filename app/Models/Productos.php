<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

class Productos extends Model
{
    protected $table    = 'productos';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields    = ["id","codigo","imagen","nombre","marca","tipo","grupo","peso","precio_unidad","stock","status"];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;
	private $dbConnect = false;
    
    public function getAll() { 
        try{
            return $this->findAll();
        }catch(Exception $e){
            die(json_encode(array("status" => 0, "msg" => "Error. ".$e)));
        }  
    }

    public function getProductro($data) { 
        try{
            return $this->where("id" , $data)->findAll();
        }catch(Exception $e){
            die(json_encode(array("status" => 0, "msg" => "Error. ".$e)));
        }  
    }

    public function updateById($id, $data){
        try{
            $this->update($id, $data);
            return array("status" => 1, "msg" => "Registro editado satisfactoriamente");
        }catch(Exception $e){
            die(json_encode(array("status" => 0, "msg" => "Error. ".$e)));
        }  
    }

    public function insertData($data){
        try{
            $this->insert($data);
            $insert = $this->getInsertID();
            return array("status" => 1, "id" => $insert);
        }catch(Exception $e){
            die(json_encode(array("status" => 0, "msg" => "Error. ".$e)));
        }  
    }

    public function getMarca() {
            return $this->groupBy('marca')->findAll();
    }

    public function getTipo() {
            return $this->groupBy('tipo')->findAll();
    }

    public function getGrupo() {
            return $this->groupBy('grupo')->findAll();
    }

	public function searchProducts(){
		$sqlQuery = "SELECT * FROM productos WHERE stock";
		if(isset($_POST["minPrice"], $_POST["maxPrice"]) && !empty($_POST["minPrice"]) && !empty($_POST["maxPrice"])){
			$sqlQuery .= " AND precio_unidad BETWEEN '".$_POST["minPrice"]."' AND '".$_POST["maxPrice"]."'";
		}
		if(isset($_POST["marca"])) {
			$marcaFilterData = implode("','", $_POST["marca"]);
			$sqlQuery .= " AND marca IN('".$marcaFilterData."')";
		}
		if(isset($_POST["grupo"])){
			$grupoFilterData = implode("','", $_POST["grupo"]);
			$sqlQuery .= " AND grupo IN('".$grupoFilterData."')";
		}
		if(isset($_POST["tipo"])) {
			$tipoFilterData = implode("','", $_POST["tipo"]);
			$sqlQuery .= " AND tipo IN('".$tipoFilterData."')";
		}
		$sqlQuery .= " ORDER By precio_unidad";
        $totalResult = $this->db->query($sqlQuery);
        //return $totalResult;
		$searchResultHTML = '';
		if($totalResult) {
			/*while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {*/
			foreach ($totalResult->getResultArray() as $row) {
				$searchResultHTML .= '
				<div class="col-sm-4 col-lg-3 col-md-3">
				<div class="product">
				<img src="'. $row['imagen'] .'"  alt="" class="img-responsive" >
				<p align="center"><strong><a href="producto/'. $row['id'] .'">'. $row['nombre'] .'</a></strong></p>
				<h4 style="text-align:center;" class="text-danger" >'. $row['precio_unidad'] .'</h4>
				<p>Camera : '. $row['peso'].' MP<br />
				Brand : '. $row['marca'] .' <br />
				RAM : '. $row['tipo'] .' GB<br />
				Storage : '. $row['grupo'] .' GB </p>
				</div>
				</div>';
			}
		} else {
			$searchResultHTML = '<h3>No se ha encontrado ningún producto..</h3>';
		}
		return $searchResultHTML;
	}	
}
