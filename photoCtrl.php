<?php
session_start();
class photoCtrl
{

  private $error;
  private $con;

    // ประกาศปุ๊บ connect db เลย
    function __construct()
    {
      $serverName   = "localhost";
      $userName     = "root";
      $passWord ="";
      $dbName   = "mydb";
      $this->con = mysqli_connect($serverName,$userName,$passWord,$dbName);
      if($this->con->connect_error){
        die("Connection failed: "  . $this->conn->connect_error);
      }
    }

  public function update($path){
    $sql = "UPDATE advertise SET photo_Path = '$path' ";
    $this->con->query($sql) ;

  }
  public function select(){
      $sql = "SELECT * FROM advertise ";
      $query = mysqli_query($this->con,$sql);
      $result = $query->fetch_assoc();
      return $result['photo_Path'];
      $con->close();
      }

}
 ?>
