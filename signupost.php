
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
<h2>Signup!</h2>

<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$con = new mysqli($server, $username, $password);
define('DB_HOST', 'localhost');
define('DB_NAME', 'practice');
define('DB_USER','root');
define('DB_PASSWORD','');
$conn=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed
to connect to MySQL: " . mysql_error());
$db=mysql_select_db($db,$con) or die("Failed to connect to
MySQL: " . mysql_error()); 
/* 
$ID = $_POST['user'];
$Password = $_POST['pass']; */
function SignIn() {
session_start(); 
//starting the session for user profile page 
if(!empty($_POST['user'])) 
//checking the 'user' name which is from Sign-In.html, is it empty or have some text 
{ 
$query = mysql_query("SELECT * FROM users where username = '$_POST[user]' AND pass = '$_POST[password]'") or die(mysql_error());
$row = mysql_fetch_array($query) or die(mysql_error()); 
if(!empty($row['username']) AND !empty($row['password'])) { $_SESSION['username'] = $row['password']; 
echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
} 
else
{ 
echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
} 
    
} 
    
} 
if(isset($_POST['submit'])) {
SignIn();
} 
?>



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