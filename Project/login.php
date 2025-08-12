<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-3 mt-5 text-center">
        <h1>Login Form</h1>
        <form action="#" method="post">
          <input type="text" placeholder="User mail" class="mt-3 form-control" name="mail">
          <input type="text" placeholder="User password" class="mt-3 form-control" name="password">
          <button type="submit" name="login" class="mt-3 btn btn-info">Login</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

<?php
include 'conn.php';

if (isset($_POST['login'])) {
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    $query = "SELECT * FROM allusers WHERE mail = '{$mail}' AND password = '{$password}'";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $mail;
        $_SESSION['userrole'] = $row['role'];

        if ($row['role'] === "admin") {
            header('Location: admin.php');  // ✅ Admin goes to admin.php
        } else {
            header('Location: web.php');    // ✅ User goes to web.php
        }
        exit();
    } else {
        header('Location: register.php'); // if login fails
        exit();
    }
}
?>
