<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<?php
include 'constants.php';
?>
<body class="text-center">
    <div id="topmenu">
        <button id="mypolls" class="btn btn-info">My Polls</button>
        <button id="newpoll" class="btn btn-success">New Poll</button><br><br>
    </div>
    <div id="votebox" class="text-center">
        <input placeholder='Which is better?' id="title"></input><br><br>
        <input placeholder='option' id="option"></input><br><br>
        <button id="btn1" class="btn btn-primary">Add Options</button>
        
        
        
        
<?php
$sql = "INSERT INTO db_votes (id,name, options)
VALUES (default,'$_POST[name]',' $_POST[options]')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

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