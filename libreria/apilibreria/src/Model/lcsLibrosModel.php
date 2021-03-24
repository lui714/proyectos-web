<?php
namespace App\Model;
use App\Config\DB;


class lcsLibrosModel {
    private static $table = 'libros';
    private static $DB;

    public static function conexionDB(){
        lcsLibrosModel::$DB = new DB();
    }

    public static function lcsnew($param){
        try{
             lcsLibrosModel::conexionDB();
             $sql = "insert into usuarios (libro_id, nombre_libro, descripcion, categoriaid, editorid, precio, entrega, imagen) 
                     values (?, ?, ?, ?, ?, ?, ?, ?)";
             $data = lcsLibrosModel::$DB->run($sql, $param);
             return " insertado correctamente ";
        } 
        catch(Exception $e){
           return $e->getMessage();
        }
    }

    public static function lcsFilter($param){
        lcsLibrosModel::conexionDB();
        $sql = "Select * from libros l inner join categorias c on l.categoriaid=c.categoriaid where l.precio > ? and c.nombre_categoria = ? ";
        $data = lcsLibrosModel::$DB->run($sql, $param);
        return $data->fetchAll();
    }

    public static function lcsAll(){
        lcsLibrosModel::conexionDB();
        $sql = "Select * from libros";
        $data = lcsLibrosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }

}