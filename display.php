<?php
include 'connection.php';
    $q="select * from `system`";
    $query=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
    <div class="col-lg-12"><br><br>
        <h1 class="text-warning text-center">Crud System In Php</h1><br>
        <table class="table table-striped table-hover table-bordered">
            <tr class="bg-dark text-white text-center">
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Delete</th>
                <th>Update</th>
</tr>
<tr>
<?php
include 'connection.php';
    $q="SELECT * FROM `system`";
    $query=mysqli_query($con,$q);
    while($res = mysqli_fetch_array($query)){

?>
<tr class="text-center">
                 <th><?php echo $res['id']; ?></th>
                <td> <?php echo $res['username']; ?></td>
                <td><?php  echo $res['password']; ?></td>
                <td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</button></td>
                <td>
                <button class="btn-primary btn"><a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">Update</button></td>       
</tr>
<?php
    }
?>
</table>
</div>
</div>
</body>
</html>