<html>

<head>
    <title>Koneksi Database mySql</title>
</head>

<body>
    <h1>Demo Koneksi Database My Sql</h1>
    <?php
    $con = mysqli_connect("localhost", "root", "", "appwarung");

    // check connection

    if (mysqli_connect_errno()) {
        echo "failed to connect to mySql : " . mysqli_connect_error();
        exit();
    }
    ?>


</body>

</html>