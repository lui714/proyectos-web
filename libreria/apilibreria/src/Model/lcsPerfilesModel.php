<?php
namespace App\Model;
use App\Config\DB;


class lcsPerfilesModel {
    private static $table = 'perfiles';
    private static $DB;

    public static function conexionDB(){
        lcsPerfilesModel::$DB = new DB();
    }
    public static function getFilter($sql, $param){
        $data = lcsPerfilesModel::$DB->run($sql, $param);
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
             lcsPerfilesModel::conexionDB();
             $sql = "insert into perfiles (perfilid, email, facebook, instagram, foto, rol, userid) 
                     values (?, ?, ?, ?, ?, ?, ?)";
             $data = lcsPerfilesModel::$DB->run($sql, $param);
             return "perfil". $param[0] . "insertado correctamente ";
        } 
        catch(Exception $e){
           return $e->getMessage();
        }
     }

}