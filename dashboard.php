<?php  session_start(); ?>

<!-- Imports -->
<?php require_once './includes/db.php';  ?>
<!-- PHP -->
<?php

$logged_user_id = $_SESSION['loggedInUserId'];
$remember_me = $_SESSION['remember_me'];

$query = "SELECT * FROM users WHERE users.id='$logged_user_id'";
$result = mysqli_query($connect, $query);
$num_rows = mysqli_num_rows($result);

if($num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $username = $row['username'];
    }
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
    <title>Dashboard</title>
    <!-- CSS Styles -->
    <style>

    </style>
</head>

<body>
    <div class="container">
    <p>THis is the dashboard</p>
    <p>User Id: <?= $logged_user_id ?></p>
    <p>Remember ME: <?= $remember_me ?></p>
    <p>Username: <?= $username?></p>
    </div>

    <!-- Javascript -->
    <script>
        console.log("Testing");
    </script>
</body>

</html>