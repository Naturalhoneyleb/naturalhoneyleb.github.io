<?php
$name = $_POST['name']
$phonenb = $_POST['phonenb']
$age = $_POST['age']

// Database connection
$conn = new mysqli('localhost','root','','test_1');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into test_1(name, phonenb, age) values(?, ?, ?)");
    $stmt->bind_param("sss", $name, $phonenb, $age);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
?>