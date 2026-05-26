<?php 
    //db credentials
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'clientmsdb');
    //establish database connection
    try{
        $dbh = new PDO("mysql:host=" .DB_HOST. ";dbname=" .DB_NAME,DB_USER,DB_PASS,array(PDO::MYSQL_AATR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }
    catch(PDOException $e){
        exit("Error: " . $e->getMessage());
    }
?>
    