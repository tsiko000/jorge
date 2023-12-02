<?php

    include 'db.php';
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql_u = "SELECT * FROM users WHERE username='$username'";
    $res_u = mysqli_query($db, $sql_u);
