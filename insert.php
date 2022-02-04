<?php 

include 'conn.php';

if(isset($_POST['btn']))
{

$username=$_POST['username'];
$password=$_POST['password'];

$sql="insert into crudtable (username, password) values('$username', '$password')";

$query=mysqli_query($conn,$sql) or die(mysqli_error());

// if($query){
//     echo "form submited successfully";
// }else{
//     echo "form failed to submit";

// }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="col-lg-6 m-auto">

    <form method="post">
          <div class="card">
           <br> <div class="card-header bg-dark">
                <h1 class="text-white text-center">CRUD Operation</h1>
            
            </div>
          <br> <label>Username : </label>
            <input autocomplete="off" type="text" name="username" onfocus="this.value=''" class="form-control"><br>

            <label>Password : </label>
            <input autocomplete="off" type="password" name="password" onfocus="this.value=''"><br><br>

            <button name ="btn" type ="submit" class="btn btn-success">Submit</button>
</div>

    </form>



    </div>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
