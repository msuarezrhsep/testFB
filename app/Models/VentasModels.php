<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

class VentasModels extends Model
{
    protected $table    = 'ventas';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields    = ["id","id_producto","costo_venta","fecha_compra"];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;
    
    public function getAll() { 
        try{
            return $this->findAll();
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
}
