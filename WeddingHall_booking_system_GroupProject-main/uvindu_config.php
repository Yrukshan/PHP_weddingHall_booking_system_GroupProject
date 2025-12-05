<?php
$conn = new mysqli("localhost", "root", "", "database_new1");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>