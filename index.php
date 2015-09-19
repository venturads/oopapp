<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- import plugin script -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js'></script>
</head>

<body class="text-center">
    <div id="topmenu">
        <button id="mypolls" class="btn btn-info">My Polls</button>
        <button id="newpoll" class="btn btn-success">New Poll</button><br><br>
        <button id="login" class="btn btn-info" action="login.php">Login</button><br><br>
    </div>
    <div id="votebox" class="text-center">
        <form action="addpoll.php" method="post">
            <input type="text" placeholder='Which is better?' name="name"></input><br><br>
            <input type="text" placeholder='option' name="options"></input><br><br>
            <label type="text" id="label1" class="btn btn-primary">Add Options</label>
            <p></p>
            <input type="submit" id="btn1" class="btn btn-info">
        </form>
    </div>
    
<script>
function echoHello(){
 $("#login").append("<?PHP hello(); ?>");
 }
</script>
 
<?PHP
FUNCTION hello(){
 include 'login.php';
 }
 
?>
 
<button onclick="echoHello()">Say Hello</button>

<script src="js/script.js"></script>
<script src="js/pollchart.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php
include 'constants.php';
include 'pollchart.php';
?>
</body>
</html>