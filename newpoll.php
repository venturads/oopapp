<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- import plugin script -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js'></script>
</head>

<body class="text-center">
<?php
    include 'topmenu.php';
?>
<div id="votebox" class="text-center">
        <form action="addpoll.php" method="post">
            <input type="text" placeholder='Which is better?' name="name"></input><br><br>
            <input type="text" placeholder='option' name="options"></input><br><br>
            <label type="text" id="label1" class="btn btn-primary">Add Options</label>
            <p></p>
            <input type="submit" id="btn1" class="btn btn-info">
        </form>
    </div>
<script src="js/script.js"></script>
<script src="js/pollchart.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>