<?php
namespace App\Model;
use App\Config\DB;

//definimos LibrosModel como una clase estática:
//no se puede hacer un new, no hay $this, no hay método __contruct()
class lcsDetallePerfilesModel {
    private static $table = 'perfiles';
    private static $DB;

    public static function conexionDB(){
        lcsDetallePerfilesModel::$DB = new DB();
    }
    public static function getFilter($sql, $param){
        $data = lcsDetallePerfilesModel::$DB->run($sql, $param);
        return $data->fetchAll();
    }

    public static function getAll(){
        lcsPerfilesModel::conexionDB();
        $sql = "Select * from perfiles";
        $data = lcsPerfilesModel::$DB->run($sql, []);
        return $data->fetchAll();
    }

    public static function lcsnew($param){
        try{
             lcsPeriflesModel::conexionDB();
             $sql = "insert into usuarios (perfilid, email, facebook, instagram, foto, rol, userid) 
                     values (?, ?, ?, ?, ?, ?, ?)";
             $data = lcsPerfilesModel::$DB->run($sql, $param);
             return "perfil". $param[0] . "insertado correctamente ";
        } 
        catch(Exception $e){
           return $e->getMessage();
        }
     }

}