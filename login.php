<?php session_start();  ?>

<!-- Imports -->
<?php include './includes/config.php';  ?>
<?php require_once './includes/db.php' ?>

<!-- PHP -->
<?php

$login_btn = $_POST['login_btn'];

if (isset($login_btn)) {
  // echo "<script>alert('Button clicked');</script>";
  $username = $_POST['username'];
  $password = $_POST['password'];

  // clean inputs


  // Operations to the DB
  $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($connect, $query);
  $num_rows = mysqli_num_rows($result);
  // CHeck id there exist atleast one user
  if ($num_rows > 0) {
    $row = mysqli_fetch_assoc($result);

    $user_id = $row['id'];    
    $remember_me = true;

    $_SESSION['loggedInUserId'] = $user_id;
    $_SESSION['remember_me'] = $remember_me;
    // echo "<script>alert('Username and password correct');</script>";

    // Storing the user infos in the session

    header('location: '. $BASE_URL.'dashboard.php');
  }
  else {
    echo "<script>alert('Username and password incorrect');</script>";
  }
} else {
  // header("location: login.php");
}



?>


<!-- HTML Content -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= $BASE_URL ?>css/index.css">
  <title>Login</title>
  <!-- CSS Styles -->
  <style>

  </style>
</head>

<body>
  <div class="container">
    <div class="col-3"></div>
    <div class="col-4">
      <div class="login_form">
        <form action="" class="form" method="POST">
          <div class="form-group mb-2">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter your username">
          </div>

          <div class="form-group mb-2">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter your password">
          </div>

          <input type="submit" class="form-control btn btn-primary mb-2" name="login_btn" value="Send">
        </form>
      </div>

    </div>
    <div class="col-3"></div>
  </div>

  <!-- Javascript -->
  <script>
    console.log("Testing");
  </script>
</body>

</html>