<!-- bar chart canvas element -->
<canvas id="income" width="600" height="400"></canvas>

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

$sql = "SELECT id, name, options FROM db_votes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " " . $row["options"] . "<br>";
           
            // draw bar chart
            new Chart(income).Bar(barData);
            
            var data = {
                labels: $row["name"],
                datasets: [
                    {
                        fillColor: "rgba(220,220,220,0.5)",
                        strokeColor: "rgba(220,220,220,0.8)",
                        data: [65]
                    }
                    }
                ]
            };
     }
} else {
     echo "0 results";
}

$conn->close();
?> 
