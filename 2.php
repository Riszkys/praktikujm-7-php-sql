<?php
$servername = "localhost";
$username = "root";
$password = "";

// create Connection 
$conn = mysqli_connect($servername, $username, $password);
// check connection

if (!$conn) {
    die("Connection Failed : " . mysqli_connect_error());
}

// create database 
$sql = "CREATE DATABASE myDB";

if (mysqli_query($conn, $sql)) {
    echo "Database Created Succesfully!";
} else {
    echo "Error Creating Database : " . mysqli_error($conn);
}

mysqli_close($conn);
