<?php

class BxIlluminateConnector {

    private static $inited = false;
 
    public static function Init() {

        if(self::$inited) {
            return;
        }
        
        self::$inited = true;
        
        if (file_exists($_SERVER["DOCUMENT_ROOT"] . '/local/modules/bxilluminate/vendor/autoload.php')) {
            require_once($_SERVER["DOCUMENT_ROOT"] . "/local/modules/bxilluminate/vendor/autoload.php");
        }
 
        $connection = self::GetConnection();

        $capsule = new Illuminate\Database\Capsule\Manager;
        $capsule->addConnection($connection);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }

    public static function GetConnection() {
        $settings = include($_SERVER["DOCUMENT_ROOT"] . "/bitrix/.settings.php");
        $mess = [
            'driver' => 'mysql',
            'host' => $settings["connections"]["value"]["default"]["host"],
            'database' => $settings["connections"]["value"]["default"]["database"],
            'username' => $settings["connections"]["value"]["default"]["login"],
            'password' => $settings["connections"]["value"]["default"]["password"],
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'unix_socket' => '/var/lib/mysqld/mysqld.sock'
        ];
        return $mess;
    }
} 