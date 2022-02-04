<?php

include 'conn.php';
include 'insert.php';

if(isset($_POST['btn'])){

$id=$_GET['id'];
$username=$_POST['username'];
$password=$_POST['password'];

$sql="insert into crudtable id='$id',username='$username',password='$password' where id='$id'";

mysqli_query($conn,$sql);

}

?>