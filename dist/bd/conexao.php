<?php


class Conexao {

    private static $instance = null;

    private function __construct() {}

    private function __clone() {}
            

    public static function conectar()  {
    
    if (!isset(self::$instance)) {
        try {
        //$conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD,
        //array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        self::$instance = new PDO('mysql:host=endereco;dbname=nomebd', 'usuario', 'senha',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
  
    }

}

    return self::$instance;

}

public static function desconectar()
{
    self::$instance = null;
}




}





?>