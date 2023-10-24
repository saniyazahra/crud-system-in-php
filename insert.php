<?php
include 'connection.php';
if(isset($_POST['done'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $q="INSERT INTO `system`(`username`, `password`) VALUES ('$username','$password')";
    $query=mysqli_query($con,$q);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="col-lg-6 m-auto">
        <form action="" method="post">
            <br><br><div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Insert Operation</h1>
</div><br>
<label>User Name:</label>
<input type="text" name="username" placeholder="Enter username" class="form-control">
<br><label>Password:</label>
<input type="password" name="password" placeholder="password" class="form-control">
<button class="btn btn-success" type="submit" name="done">Submit</button><br>
</div>
</form>
</div>
    
</body>
</html>