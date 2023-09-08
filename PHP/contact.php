<?php

if(isset($_POST['c_submit'])){
  $cname = $_POST['c_name'];
  $cemail = $_POST['c_email'];
  $cmessage = $_POST['c_message'];

$servername = "localhost";
$username = "89133";
$password = "#1Geheim!";
$dbname = "db89133";
$messagedate = date("Y/m/d");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  $data1 = "Did not connect";
  echo("<script>console.log('PHP: " . $data1 . "');</script>");
}
else {
  $data2 = "Connected successfully";
  echo("<script>console.log('PHP: " . $data2 . "');</script>");
}

$sql = "INSERT INTO INTRO_WEEK (name, email, date, message)
VALUES ('$cname', '$cemail', '$messagedate', '$cmessage')";

if ($conn->query($sql) === TRUE) {
  $data3 = "New record created successfully";
  echo("<script>console.log('PHP: " . $data3 . "');</script>");
} else {
  $data4 = "Could not create the record.";
  echo("<script>console.log('PHP: " . $data4 . "');</script>");
}
$conn->close();

  include_once("../portfolio.php");
} else {
  header('location:../portfolio.php');
}
