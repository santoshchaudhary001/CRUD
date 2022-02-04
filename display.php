
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display data</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">


</head>
<body>
    <div class="container">
        <div class="col-lg-12">
            <h1 class="text-warning text-center">Display Table Data</h1>

            <table class="table table-striped table-hover table-border">
                <tr class="bg-dark text-white text-center">
                    <th>Id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Add</th>
                    <th>Update</th>
                    <th>Delete</th>

                </tr>

    <?php

        include 'conn.php';

        
            $sql = "select * from crudtable";

            $query = mysqli_query($conn,$sql);

           while($res=mysqli_fetch_array($query)){

           

    ?>


                <tr class="text-center">
                    <td> <?php echo $res['id']; ?> </td>
                    <td> <?php echo $res['username']; ?></td>
                    <td><?php echo $res['password'];  ?> </td>
                    <td><button class="btn btn-primary">
                        <a href="add.php?id=<?php echo $res['id']; ?>" class="text-white">Add</a>
                    </button></td>
                    <td> <button class="btn btn-success"> 
                        <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a>
                    </button></td>
                    <td><button class="btn btn-danger">
                        <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a>
                    </button></td>
                    

                </tr>
         <?php
           }
         ?>



            </table>
        </div>
    </div>
  
    
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>