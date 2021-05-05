<?php
namespace App\Model;
use App\Config\DB;

class LibrosModel {
    private $db;
    private $table = 'libros';
  
    public function __construct() {
        $this->db = new DB();
    }

    public function getFilter($sql, $param){
        $data = $this->db->run( $sql , $param);
        return $data->fetchAll();
    }
    public function getAll(){
        $sql = "SELECT * from $this->table";
        $data = $this->db->run( $sql , []);
        return $data->fetchAll();
    }
    public function show($sql, $param){
        $data = $this->db->run( $sql , $param);
        return $data->fetch();
    }
}