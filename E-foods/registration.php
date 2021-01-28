<?php

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$message=$_POST['message'];

$con = new mysqli('localhost','root','','mydb');
if($con->connect_error){
    die('Connection Failed :'.$con->connect_error);
}else{
    $stmt = $con->prepare("insert into suggestion(name,email,mobileno,message)values(?,?,?,?)");
    $stmt->bind_param("ssss, $name, $email, $mobile, $message);
    $stmt->execute();
    echo "Registration Successfull bro...!";
    $stmt->close();
    $con->close();
}

?>