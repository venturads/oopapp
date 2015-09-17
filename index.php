<?php
include 'constants.php';
?>
<body>
<?php
echo 'helloworld';
$cars = array("ford","bmw","dodge");
echo "<br>" .$cars[1]. " " .count($cars);

?>
<button id="btn" class="btn btn-primary" onclick="myFun()">car</button>

<style>
.body{
    font-style:center;
}
</style>
<script>
function myFun(){
    document.getElementById("btn").innerHTML ="switch";
};
</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>