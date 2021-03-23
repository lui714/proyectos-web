<?php
namespace App\Model;
use App\Config\DB;

//definimos LibrosModel como una clase estática:
//no se puede hacer un new, no hay $this, no hay método __contruct()
class lcsDetallePedidosModel {
    private static $table = 'detallepedidos';
    private static $DB;

    public static function conexionDB(){
        lcsDetallePedidosModel::$DB = new DB();
    }
    public static function getFilter($sql, $param){
        $data = lcsDetallePedidosModel::$DB->run($sql, $param);
        return $data->fetchAll();
    }

    public static function getAll(){
        lcsDetallePedidosModel::conexionDB();
        $sql = "Select * from detallepedidos";
        $data = lcsDetallePedidosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
    public static function show($param){
        lcsDetallePedidosModel::conexionDB();
        $sql = 'SELECT * from detallepedidos';
        $data = lcsDetallePedidosModel::$DB->run($sql, $param);
        return $data->fetch();
    }
}