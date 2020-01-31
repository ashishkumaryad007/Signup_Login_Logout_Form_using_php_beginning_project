<?php  
include("db.php");

$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$EncryptPassword = sha1($password);

if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    echo "Error: Name can not be Empty  </br>";
} else {
    $sql = "INSERT INTO Ashish_User(name,email,password)
    VALUES ( '$name','$email','$EncryptPassword')";
}

if ($conn->query($sql) === TRUE) {
    echo "You are Registered successfully";
    header('Location: login.php');

} else {
    echo "Error: Query Is Not Being Perform " . $sql . "<br>" . $conn->error;
}
    $id=mysqli_insert_id($conn);
    
mysqli_close($conn);  
?>  
