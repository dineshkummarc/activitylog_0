<?php 
// $conn= new mysql('localhost','root','','activitylog')or die("Could not connect to mysql".mysql_error($con));

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "activitylog";

try {
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // set the PDO error mode to exception
  // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
// } catch(PDOException $e) {
  // echo "Connection failed: " . $e->getMessage();
}
?>