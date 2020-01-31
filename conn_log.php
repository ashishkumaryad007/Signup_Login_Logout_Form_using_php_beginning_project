<?php  
include("db.php");
if(isset($_POST['submit'])){
$username = $_POST['email'];
$password = $_POST['password'];
$EncryptPassword = sha1($password);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$qz = "SELECT * FROM Ashish_User where email='".$username."' and password='".$EncryptPassword."'" ; 
$qz = str_replace("\'","",$qz); 
$result = mysqli_query($conn,$qz);
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result) == 1){
    echo "successfully logged in";
    session_start();
    $_SESSION["id"] = $row["id"];
    $_SESSION["email"] = $row["email"];
    if(isset($_SESSION["id"])) {
      echo "yes it works";
      header('Location: match.php');
    }else{
      echo " <br>session does not work." ;
      } 
  }else{
      echo "Wrong UserName or Password..." ;
      // Jump to login page
      header('Location: login.php');
  }
mysqli_close($conn);
}
?>
