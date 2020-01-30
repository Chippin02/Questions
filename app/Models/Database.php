<?php


namespace Q\Models;

/*Al poner el "AS Capsule" le ponemos el alias*/
use Illuminate\Database\Capsule\Manager as Capsule;

class Database {

    /*Este será quién utilice la "cápsula"*/
    function __construct() {
        /*Primera parte de la conexión*/
        $capsule = new Capsule();
        /*Definimos la conexión*/
        $capsule -> addConnection([
            'driver'    => DBDRIVER,
            'host'      => DBHOST,
            'database'  => DBNAME,
            'username'  => DBUSER,
            'password'  => DBPASS,
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => ''
        ]);
        /*Activamos el eloquent*/
        /*Cada vez que creemos un new database nos creará esta conexión*/
        $capsule -> bootEloquent();
    }
}