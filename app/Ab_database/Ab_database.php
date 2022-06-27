<?php
abstract class Connection_data {
    // khai báo các thuộc tính kết nối database
    public $servename;
    public $username;
    public $password;
    public $dbname;
    // phương thức kết nối
    abstract public function ConnectData();
    abstract public function DesConn();
}
?>