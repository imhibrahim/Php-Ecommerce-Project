<?php
include 'conn.php';
if(isset($_POST['product'])){
    $name=$_POST['name'];
    $desc=$_POST['description'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $catid=$_POST['catid'];

      $pic=$_FILES['pic'];
      $imagename= uniqid()."_". round(microtime(true)*1000) .$pic["name"];
      $tmpname= $pic["tmp_name"];
      $folder="upload/".$imagename;

     if (move_uploaded_file($tmpname,$folder)) {
        $query = "INSERT INTO products (name, price, description, quantity, image, cat_id) 
                  VALUES ('$name', '$price', '$desc', '$quantity', '$imagename', '$catid')";
$result=mysqli_query($connection, $query);
        if ($result) {
            echo "<script>alert('✅ Product added successfully!');</script>";
        } 
        else {
            echo "<script>alert('❌ Database error: " . mysqli_error($connection) . "');</script>";
        }
    }
     else {
        echo "<script>alert('❌ Image upload failed!');</script>";
    }
}



?>