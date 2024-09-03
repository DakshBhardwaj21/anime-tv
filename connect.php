<?php
$username = $_POST['userID'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];



$conn = new mysqli('localhost','root','','userinfo');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare('insert into anime-tv(username, email, password, confirm-password)
    values(?, ?, ?, ?)');
    $stmt->bind_param("isss",$username, $email, $password, $confirm_password);
    $stmt->execute();
    echo "Sign-Up Successfully....";
    $stmt->close();
    $conn->close();
}




?>