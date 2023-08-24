<?php

$DB_HOST = 'localhost';
$DB_USER = 'duclairdeugoue';
$DB_USER_PASSWORD = 'duclairdeugoue';
$DB_NAME = 'helloworld_db';

try {
    $connect = mysqli_connect(
        $DB_HOST,
        $DB_USER,
        $DB_USER_PASSWORD,
        $DB_NAME
    );

    //echo "Conect -----------------------";
} catch (\Throwable $th) {
    echo $th->getMessage();
}


?>