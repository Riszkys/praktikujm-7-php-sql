<html>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";
    // create COnnection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // check connection
    if (!$conn) {
        die("Connection Failed : " . mysqli_connect_error());
    }

    $sql = "SELECT kode, negara, champion FROM liga";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "kode :" . $row["kode"] . " -Negara : " . $row["negara"] . " " . $row["champion"] . "<br>";
        }
    } else {
        echo " 0 Result";
    }
    mysqli_close($conn)
    ?>




</body>

</html>