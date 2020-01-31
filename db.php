<?php  
$host = '45.64.11.3';  
$user = 'trainee';  
$pass = 'trai@123';  
$dbname = 'training';  
   
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';
?>