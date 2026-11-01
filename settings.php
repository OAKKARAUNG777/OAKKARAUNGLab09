<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>Settings</title>
</head>
<body>
    <?php
        $host = "localhost";
        $user = "root";
        $pwd = "";
        $sql_db = "exhibition_db";

        $conn = mysqli_connect($host, $user, $pwd, $sql_db);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    ?>
</body>
</html>
