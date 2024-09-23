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
$Message=  $_REQUEST['Message'];
$sql = "INSERT INTO contact (Name,Mobile,EMail,Message)
VALUES ('$Name', '$Mobile', '$EMail', '$Message')";

if ($conn->query($sql) === TRUE) {
  $head = 'Location: /rana/products.webrockmedia.com/prayer-html/contact.html?msg=contact+added+successfully..';
} else {
  $head = 'Location: /rana/products.webrockmedia.com/prayer-html/contact.html?msg=' . $conn->error;
}

$conn->close();
header($head);
?>