<?php
include 'conn.php';
$delid=$_GET['id'];

$result=mysqli_query($connection,"delete from  categories where id={$delid}");
if($result){
    header('location:fatchcat.php');
}
else{
    header('location:fatchcat.php');
}
?>