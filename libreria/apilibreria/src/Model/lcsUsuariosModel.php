<?php 
namespace App\Model;
use App\Config\DB;
use Exception;


class lcsUsuariosModel {
    private static $table = 'usuarios';
    private static $DB; 

    public static function conexionDB(){
        lcsUsuariosModel::$DB = new DB();
    }

    public static function delete($param){
             lcsUsuariosModel::conexionDB();
             $sql = "DELETE FROM usuarios WHERE usuarioid = ?";
             $data = lcsUsuariosModel::$DB->run($sql, $param);
             return "Usuario ". $param[0] . " borrado correctamente ";
    }

    public static function getAll(){
        lcsUsuariosModel::conexionDB();
        $sql = "Select * from usuarios";
        $data = lcsUsuariosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }

    public static function update($param){
        lcsUsuariosModel::conexionDB();
        $sql = "UPDATE usuarios SET nombre = '$param[1]', apellidos = '$param[2]', ciudad = '$param[4]', direccion = '$param[3]', anioNac = $param[5]  where usuarioid = $param[0]";
        $data = lcsUsuariosModel::$DB->run($sql, $param);
        return "Usuario cambiado correctamente ";
    }

    public static function lcsnew($param){
       try{
            lcsUsuariosModel::conexionDB();
            $sql = "insert into usuarios (usuarioid, nombre, apellidos, direccion, ciudad, anioNac) 
                    values (?, ?, ?, ?, ?, ?)";
            $data = lcsUsuariosModel::$DB->run($sql, $param);
            return "Usuario ". $param[0] . " insertado correctamente ";
       } catch(Exception $e){
          return $e->getMessage();
       }
    }
}