<?php 
   
   $containerAPP->set('db_settings', function(){
        return (object)[
            "DB_NAME" => "libreria",
            "DB_USER" => "root",
            "DB_PASS" => "",
            "DB_CHARSET" => "utf8",
            "DB_HOST" => "localhost"
        ];
   });