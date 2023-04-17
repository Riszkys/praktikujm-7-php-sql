<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection Failed : " . mysqli_connect_error());
}

$sql = "INSERT INTO liga (kode, negara, champion) VALUES ('Jer', 'Jerman', '4')";
if (mysqli_query($conn, $sql)) {
    echo "New Record Succesfully!";
} else {
    echo "Error : " . $sql . "<br>" . mysqli_connect_error($conn);
}
mysqli_close($conn);
