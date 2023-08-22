<!-- Imports -->

<!-- PHP -->
<?php

$username = $_POST['username'];
$password = $_POST['passwd'];
?>


<!-- HTML Content -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/index.css">
    <title>Dashboard</title>
    <!-- CSS Styles -->
    <style>

    </style>
</head>

<body>
    <div class="container">
    <p>THis is the dashboard</p>
    <p>Username: <?= $username ?></p>
    <p>Password: <?= $password ?></p>
    </div>

    <!-- Javascript -->
    <script>
        console.log("Testing");
    </script>
</body>

</html>