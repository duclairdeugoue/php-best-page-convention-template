<!-- Imports -->
<?php include './includes/config.php';  ?>


<!-- PHP -->
<?php




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
        <form action="<?= $BASE_URL ?>dashboard.php" class="form" method="POST">
          <div class="form-group mb-2">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter your username">
          </div>

          <div class="form-group mb-2">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="passwd" placeholder="Enter your password">
          </div>

          <input type="submit" class="form-control btn btn-primary mb-2" value="Send">
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