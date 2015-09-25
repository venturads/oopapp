
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
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$username = $email = $password = "";

session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
 $username = mysql_real_escape_string($_POST['username']);
 $email = mysql_real_escape_string($_POST['email']);
 $password = md5(mysql_real_escape_string($_POST['password']));
 
 if(mysql_query("INSERT INTO users(username,email,password) VALUES('$username','$email','$password')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>

<h2>Signup!</h2>
<p><span class="error">* required field.</span></p>
<form method="post"> 
   <input placeholder="JohnDoe123" type="text" name="username" required />
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   <input placeholder="Password" type="text" name="password" required />
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   <input placeholder="info@venturads.com" type="text" name="email" required />
   <br><br>
   <input class="btn btn-success" type="submit" name="submit" value="Submit"> 
</form>

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