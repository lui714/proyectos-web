<?php
namespace App\Model;
use App\Config\DB;

//definimos LibrosModel como una clase estática:
//no se puede hacer un new, no hay $this, no hay método __contruct()
class lcsCategoriasModel {
    private static $table = 'categorias';
    private static $DB;

    public static function conexionDB(){
        lcsCategoriasModel::$DB = new DB();
    }
    public static function getFilter($sql, $param){
        $data = lcsCategoriasModel::$DB->run($sql, $param);
        return $data->fetchAll();
    }

    public static function getAll(){
        lcsCategoriasModel::conexionDB();
        $sql = "Select * from categorias";
        $data = lcsCategoriasModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
    public static function show($param){
        lcsCategoriasModel::conexionDB();
        $sql = 'SELECT * from categorias';
        $data = lcsCategoriasModel::$DB->run($sql, $param);
        return $data->fetch();
    }
}