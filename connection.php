<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subjects = $_POST['subjects'];
    $message = $_POST['message'];

    // connection

    $conn = new mysqli('localhost','root','','portfolio');
    if($conn->connect_error) {
        die('Connection faile : '.$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("insert into portfolio(name,email,subjects,message) values(?,?,?,?)");
        $stmt->bind_param("ssss",$name,$email,$subjects,$message);
        $stmt->execute();
        header("location:index.php");

        $stmt->close();
        $conn->close();

    }

?>