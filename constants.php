<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, options,options2, options3,options4 FROM db_votes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br>Name: ". $row["name"] . " <button class='btn btn-success' id=" . $row["options"] . "> " . $row["options"] . "</button> " . $row["options2"] . " " . $row["options3"] . " " . $row["options4"] . "<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?> 