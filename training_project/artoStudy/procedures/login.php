<?php

require_once("connection/connect.php");


if (isset($_POST['logged'])) {

    
// con_name - Email
// con_email - Password

    $query5 = sprintf("SELECT * FROM users WHERE email='".$_POST['con_name']."' and password='".$_POST['con_email']."'", mysqli_real_escape_string($conn, $_POST['con_name']), mysqli_real_escape_string($conn, $_POST['con_email']));
    $result5 = mysqli_query($conn, $query5);
    $userParams5 = mysqli_fetch_assoc($result5);

    $query6 = "select * from users where email='".$_POST['con_name']."'";
    $result6 = mysqli_query($conn, $query6);
    $userParams6 = mysqli_fetch_assoc($result6);


    if ($userParams5) {
        session_start();

        $_SESSION['email'] = $_POST['con_name'];

        $_SESSION['password'] = $_POST['con_email'];

        $_SESSION['id'] = $userParams5['id'];

        $_SESSION['username'] = $userParams5['username'];


        header("location:../logged/main/");

    } else {

        header("location:../login.php?error");


    }

}



?>