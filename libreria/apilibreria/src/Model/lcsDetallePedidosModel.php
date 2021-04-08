<?php
namespace App\Model;
use App\Config\DB;


class lcsDetallePedidosModel {
    private static $table = 'detallepedidos';
    private static $DB;

    public static function conexionDB(){
        lcsDetallePedidosModel::$DB = new DB();
    }

    public static function getfilter($param){
        lcsDetallePedidosModel::conexionDB();
        $sql = "Select * from detallepedidos d inner join libros l on d.CodigoLibro=l.libro_id
                where ";
        $data = lcsDetallePedidosModel::$DB->run($sql, $param);
        return $data->fetchALL();
    }


    public static function getAll(){
        lcsDetallesPedidosModel::conexionDB();
        $sql = "Select * from detallepedidos";
        $data = lcsDetallesPedidosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }

}