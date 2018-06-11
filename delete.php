<?php
require 'mysql/connect.php';

$id = $_POST['bookID'];
$sql="delete from book where bookID=$id ";
$result=mysqli_query($con,$sql);
if($result){
    header("Refresh:0; url=table.php");
}else{
    echo mysqli_error($con);
}
?>