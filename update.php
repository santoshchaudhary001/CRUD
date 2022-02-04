<?php 

include 'conn.php';
include 'insert.php';

if(isset($_POST['btn'])){



$id=$_GET['id'];
$username=$_POST['username'];
$password=$_POST['password'];

$sql="update crudtable set username='$username',password='$password' where id='$id'";

$query=mysqli_query($conn,$sql);



header('location:display.php');
}

?>