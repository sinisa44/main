<?php

class db {

    public $connect;
    public function __construct()
    {
        try {

            $this->connect = new PDO("mysql:host=localhost;dbname=cegek", 'root', '');

        } catch(PDOException $e){
            echo "Connection error: ". $e->getMessage();
        }
    }

}


?>