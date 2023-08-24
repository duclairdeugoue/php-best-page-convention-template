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
    <title>Home Page</title>
    <!-- CSS Styles -->
    <style>

    </style>
</head>

<body>
    <div class="container">
    <p>Home Page</p>
    <a href="<?= $BASE_URL  ?>login.php" class="btn btn-primary">Sign In</a>
    <a href="<?= $BASE_URL ?>register.php"  class="btn btn-secondary">Sign Up</a>
    </div>
</body>

</html>



<!-- Javascript -->
<script>
    console.log("Testing");
</script>