<?php
namespace App\Model;
use App\Config\DB;


class lcsDetallePedidosModel {
    private static $table = 'detallepedidos';
    private static $DB;

    public static function conexionDB(){
        lcsDetallePedidosModel::$DB = new DB();
    }

    public static function lcsnew($param){
        try{
             lcsDetallePedidosModel::conexionDB();
             $sql = "insert into detallepedidos (CodigoLibro, CodigoUsuario, Cantidad, descuento, fecha) 
                     values (?, ?, ?, ?, ?)";
             $data = lcsDetallePedidosModel::$DB->run($sql, $param);
             return "Compra de ". $param[2] . " libros insertada correctamente ";
        } 
        catch(Exception $e){
           return $e->getMessage();
        }
    }

    public static function getFilter($sql, $param){
        $data = lcsDetallesPedidosModel::$DB->run($sql, $param);
        return $data->fetchAll();
    }

    public static function getAll(){
        lcsDetallesPedidosModel::conexionDB();
        $sql = "Select * from detallepedidos";
        $data = lcsDetallesPedidosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
    public static function show($param){
        lcsDetallesPedidosModel::conexionDB();
        $sql = 'SELECT * from detallepedidos';
        $data = lcsDetallesPedidosModel::$DB->run($sql, $param);
        return $data->fetch();
    }
}