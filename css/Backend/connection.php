<?php
error_reporting(0);
//echo $_SERVER['REQUEST_URI'];
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "inventory";
global $conn;
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}