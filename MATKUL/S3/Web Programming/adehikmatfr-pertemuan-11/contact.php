<?php
require 'connection.php';

$name=$_POST['name'];
$sex=$_POST['sex'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$message=$_POST['message'];

$stmt = $conn->prepare("INSERT INTO contact (name, sex, email, address, city, message) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $sex, $email, $address, $city, $message);
$stmt->execute();
$conn->close();
header("location:contact.html");

