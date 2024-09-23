<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rana";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$Name = $_REQUEST['Name'];
$Mobile = $_REQUEST['Mobile'];
$EMail =  $_REQUEST['EMail'];
$sql = "INSERT INTO members (Name,Mobile,Email)
VALUES ('$Name', '$Mobile', '$EMail')";

if ($conn->query($sql) === TRUE) {
  $head = 'Location: /rana/products.webrockmedia.com/prayer-html/members.html?msg=members+added+successfully..';
} else {
  $head = 'Location: /rana/products.webrockmedia.com/prayer-html/members.html?msg=' . $conn->error;
}

$conn->close();
header($head);
?>