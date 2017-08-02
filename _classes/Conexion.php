<?php
/**
 * Created by PhpStorm.
 * User: vguyard
 * Date: 02-08-2017
 * Time: 16:36
 */

class Conexion
{
    public static $dblink;

    public static function connect($config){
        self::$dblink = mysqli_connect($config['bdd_server'], $config['bdd_user'], $config['bdd_password'], $config['bdd_database']);
        if (self::$dblink)  mysqli_set_charset(self::$dblink,"utf8");
        return self::$dblink;
    }

    public static function disconnect(){
        mysqli_close(self::$dblink);
    }

}