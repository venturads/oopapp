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
        <form action="addpoll.php" method="post">
            <input placeholder='Which is better?' name="name" id="title"></input><br><br>
            <input placeholder='option' name="options" id="option"></input><br><br>
            <button id="btn1" class="btn btn-primary">Add Options</button>
            <p></p>
            <input type="submit" id="btn1" class="btn btn-info">
        </form>
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