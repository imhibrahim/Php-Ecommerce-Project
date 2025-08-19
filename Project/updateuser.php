<?php
include 'conn.php';
$id=$_GET['id'];

$result=mysqli_query($connection,"select * from alluser where id= {$id}");
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-5 offset-3 mt-5 text-center">
            <h1>Register Form</h1>
            <form action="#" method="post">
<input type="hidden"  name="id"  value=<?php echo $user['id']?>>
<input type="text" placeholder="enter name" name="name" class="form-control mt-3" value=<?php echo $user['name']?>>
<input type="text" placeholder="enter mail" name="mail" class="form-control mt-3" value=<?php echo $user['mail']?>>
<input type="text" placeholder="enter password" name="password" class="form-control mt-3" value=<?php echo $user['password']?>>
<input type="text" placeholder="enter role" name="role" class="form-control mt-3" value=<?php echo $user['role']?>>
<button class="btn btn-info mt-5" name="update">Update</button>


            </form>
        </div>
    </div>
</div>
</body>
</html>

<?php

if(isset($_POST['update'])){

    $name=$_POST['name'];
$mail=$_POST['mail'];
$password=$_POST['password'];
$role=$_POST['role'];
$userid=$_POST['id'];

$query="UPDATE `alluser` SET `name`='{$name}',`mail`='{$mail}',`password`='{$password}',`role`='{$role}' WHERE id ={$userid}";

$result=mysqli_query($connection,$query);
if($result){
    header('location:alluser.php');
}
else{
    header("location:alluser.php");
}
}
?>