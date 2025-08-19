<?php
include 'conn.php';
$delid=$_GET['id'];

$result=mysqli_query($connection,"delete from  alluser where id={$delid}");
if($result){
    header('location:alluser.php');
}
else{
    header('location:alluser.php');
}
?>