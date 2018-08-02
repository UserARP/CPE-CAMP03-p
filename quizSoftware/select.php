<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SELECT TEST</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "pengCpe3";
    $password = "";
    $dbname = "iotpeng";

// Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
    if ($conn->connect_error) 
    {
      die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT name,phonenumeber FROM notephone";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ชือ: " . $row["name"]. " - เบอร์: " . $row["phonenumeber"].  "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>