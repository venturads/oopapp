<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body class="text-center">
    <div id="topmenu">
        <button id="mypolls" class="btn btn-info">My Polls</button>
        <input type="button" onclick=# value="Go to Google" />
        <button id="newpoll" class="btn btn-success">New Poll</button><br><br>
    </div>
    <div id="votebox" class="text-center">
        
        
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

$result = $conn->query($sql);

$pollname = $_POST['name'];
$pollopt = $_POST['options'];
echo $pollopt;
echo $pollname;
$sql = "INSERT INTO db_votes (name,options) VALUES ('$_POST[name],$_POST[options])";

mysql_query($sql) or die('Error, query failed : ' . mysql_error());

$conn->close();
?>
        <p></p>
    </div>
<script src="js/script.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>