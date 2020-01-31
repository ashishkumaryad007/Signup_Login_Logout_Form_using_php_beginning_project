<html>
<body>
<?php
include("db.php");
session_start();
if(isset($_SESSION["id"])) {
  // print_r($_SESSION);
   ?>
      <p>This is Login page with session: <b><?php echo $_SESSION["id"]; ?></b>
      <br>
      <h1> welcome to the domain</h1></p>
      <img src="https://upload.wikimedia.org/wikipedia/commons/f/f9/Phoenicopterus_ruber_in_S%C3%A3o_Paulo_Zoo.jpg" height="500" width="1200"></br>
      <a href="logout.php"><button type="button" name="submit"
            >LogOut</button></a>
<?php
}
else
{
header("location:login.php");
}
?>
</body>
</html>