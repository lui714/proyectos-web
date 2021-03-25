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

    public static function lcsupdate($param){
        lcsLibrosModel::conexionDB();
        $sql = "UPDATE libros set precio = precio+'$param[1]', stock = stock+'$param[2]' 
                where categoriaid = '$param[0]'";
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