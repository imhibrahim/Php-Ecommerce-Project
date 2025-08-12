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
<input type="text" placeholder="enter name" name="name" class="form-control mt-3">
<input type="text" placeholder="enter mail" name="mail" class="form-control mt-3">
<input type="text" placeholder="enter password" name="password" class="form-control mt-3">
<button class="btn btn-info mt-5" name="register">Register</button>


            </form>
        </div>
    </div>
</div>
</body>
</html>


<?php
include 'conn.php';
if(isset($_POST['register'])){
    $name=$_POST['name'];
$mail=$_POST['mail'];
$password=$_POST['password'];
$result=mysqli_query($connection,"insert into allusers(name,mail,password) values('{$name}','{$mail}','{$password}')");
if($result){
    header('location:login.php');
}
else{
    header("location:register.php");
}
}
?>