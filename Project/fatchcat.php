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

$sql = "SELECT * FROM categories";
$result = mysqli_query($connection, $sql);
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-3">
            <h1 class="mb-4">All Category</h1>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class='text-center'>
                    <?php
                   

                  foreach($result as $row){
                    
                      echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['name']}</td>
                                    <td>
                                    <a href='updatecat.php?id={$row['id']}'><i class='fa-solid fa-user-pen text-success'></i></a> ||

                                    <a href='delcat.php?id={$row['id']}' class='text-danger'>
                        <i class='fa-solid fa-trash'></i>
                      </a>
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
