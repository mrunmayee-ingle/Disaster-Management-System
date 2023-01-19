<?php
$fullname=$_POST['fullname'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];
$number=$_POST['number'];
$dob=$_POST['dob'];

//database connection
$conn = new mysqli('localhost','root','','registration');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(fullname, city, gender, email, password, number, dob)values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssib",$fullname,$city,$gender,$email,$password,$number,$dob);
    $stmt->execute();
    echo "registration successfully";
    $stmt->close();
    $conn->close();
}
?>