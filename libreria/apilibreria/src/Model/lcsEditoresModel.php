<?php
namespace App\Model;
use App\Config\DB;

class lcsEditoresModel{
    private static $table = 'editores';
    private static $DB;

    
    public static function conexionDB(){
        lcsEditoresModel::$DB = new DB();
    }
    
    public static function lcsgetEditoresYLibros(){
        lcsEditoresModel::conexionDB();
        $sql = "Select * from editores e inner join libros l on e.editorid=l.editorid";
        $data = lcsEditoresModel::$DB->run($sql, []);
        return $data->fetchALL();
    }

    public static function getFilter($sql, $param){
        lcsEditoresModel::conexionDB();
        $data = lcsEditoresModel::$DB->run($sql, $param);
        return $data->fetchALL();
    }

    public static function lcsgetALL(){
        lcsEditoresModel::conexionDB();
        $sql = "Select * from editores";
        $data = lcsEditoresModel::$DB->run($sql, []);
        return $data->fetchALL();
    }

    public static function show($param){
        lcsEditoresModel::conexionDB();
        $sql = 'SELECT * From editores where editorid = ?';
        $data = lcsEditoresModel::$DB->run($sql, $param);
        return $data->fetch();
    }
}