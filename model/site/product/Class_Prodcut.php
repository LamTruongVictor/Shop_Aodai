<?php
//  gọi lớp database
include '../../../system/database.php';
// tạo lớp
class Product extends Database {
   public function __construct(){
      parent::ConnectData();
   }
   
}
?>