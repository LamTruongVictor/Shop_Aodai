<?php
include 'config.php';
include '../app/Ab_database/Ab_database.php';
// class kết nối với database
class Database extends  Connection_data {
    public $servename;
    public $username;
    public $password;
    public $dbname;
    // phương thức kết nối
    public function ConnectData(){
        echo 'hello';
    }

    public function DesConn(){
        echo $this->servename;
    }
}
?>