<?php
include_once '../../system/database.php';
// tạo đối tượng 
class db_login extends Database {
   public function __construct()
   { 
      parent::ConnectData();
   }
   
}
?>