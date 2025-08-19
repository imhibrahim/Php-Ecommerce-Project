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
    <?php
    include 'maindashboard.php';
    include 'conn.php';
    $result=mysqli_query($connection,"select * from categories") or die("Query Unsuccessful... ");

    ?>

<div class="container">
    <div class="row">
        <div class="col-md-7 offset-3">
            <h1>Product Upload</h1>
            <form action="productlogic.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6"><input type="text" placeholder="Enter Name" class="form-control" name="name"></div>
                    <div class="col-md-6"><input type="number" placeholder="Enter price Pkr" class="form-control" name="price"></div>
                  <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <textarea placeholder="Enter Desc" class="form-control mt-3" name="description"></textarea>
                    </div>
                    <div class="col-md-6"><input type="number" placeholder="Enter Quantity" class="form-control mt-3" name="quantity"></div>
                    <div class="col-md-6"><input type="file" class="form-control mt-3" name="pic"></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <select name="catid" class="form-select mt-4">
                            <option selected disabled>---Select Any Category---</option>
                           <?php
                           foreach($result as $category){
                            echo "<option value={$category['id']}>{$category['name']}</option>";
                           }
                           ?>
                        </select>
                    </div>
                    <button class="btn btn-outline-info mt-5" name="product">Add Product</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>