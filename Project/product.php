<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All User Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
include 'maindashboard.php';
include 'conn.php'; // make sure this contains your DB connection code

$sql = "SELECT p.id, p.name, p.price, p.description, p.quantity, p.image, c.name as categories
          FROM products p 
          INNER JOIN categories c ON p.cat_id = c.id";
$result = mysqli_query($connection, $sql);
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-3">
            <h1 class="mb-4">All User Data</h1>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>desc</th>
                        <th>price</th>
                        <th>Quantity</th>
                        <th>Pic</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class='text-center'>
                    <?php
                   

                  foreach($result as $row){
                      echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['description']}</td>
                                    <td>{$row['price']}</td>
                                    <td>{$row['quantity']}</td>
                                    <td><img src='upload/{$row['image']}' height='100px' width='100px'></td>
                                    <td>{$row['categories']}</td>
                                    
                                    <td>
                                    <a href='updateuser.php?id={$row['id']}'><i class='fa-solid fa-user-pen text-success'></i></a> ||

                                    
                                    </td>
                                  </tr>";
                  }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
