<?php
namespace App\Model;
use App\Config\DB;

//definimos LibrosModel como una clase estática:
//no se puede hacer un new, no hay $this, no hay método __contruct()
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

    public static function lcsgetLibrosYCategorias(){
        lcsLibrosModel::conexionDB();
        $sql = "Select * from libros l inner join categorias c on l.categoriaid=c.categoriaid 
        where c.categoriaid='1' and l.precio > '35' ";
        $data = lcsLibrosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
    public static function getFilter($param){
        lcsLibrosModel::conexionDB();
        $sql = "Select * from libros where precio > ? and editorid = ?";
        $data = lcsLibrosModel::$DB->run($sql, $param);
        return $data->fetchAll();
    }

    public static function getAll(){
        lcsLibrosModel::conexionDB();
        $sql = "Select * from libros";
        $data = lcsLibrosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
    public static function show($param){
        lcsLibrosModel::conexionDB();
        $sql = 'SELECT * from libros where libro_id = ?';
        $data = lcsLibrosModel::$DB->run($sql, $param);
        return $data->fetch();
    }
}