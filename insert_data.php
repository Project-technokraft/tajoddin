<?php

    $server_name = "localhost";
    $username = "root";
    $password = "";
    $databasename = "test";

    $conn = mysqli_connect($server_name,$username,$password,$databasename);

    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    }
    $name = $_POST["uname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["sub_ject"];
    $message = $_POST["msg"];

    $sql = "INSERT INTO tajoddin_data(uname, email, phone, sub_ject, msg) VALUES ('".$name."','".$email."','".$phone."','".$subject."','".$message."')";

    if (mysqli_query($conn, $sql)) {
        echo "Success";
    } else {
        echo "Error";
    }
    mysqli_close($conn);
?>