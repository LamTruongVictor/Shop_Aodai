<?php
include '../../../system/database.php';

class Login extends Database {
    public function __construct(){
        parent::ConnectData();
    }
}

?>