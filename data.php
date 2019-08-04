 <html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 

 
 
 <?php
$servername = "localhost";
$username = "u675665181_1";
$password = "1$|86pB!";
$dbname = "u675665181_site1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, first, last, email FROM users";
$sql2 = "SELECT id, first, last, email FROM users where email like 'mjohnson2321%'";

$result = $conn->query($sql);

$result2 = $conn->query($sql2);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["first"]. " " . $row["last"]. " - Email: " . $row["email"]."<br>";
    }
} else {
    echo "0 results";
}

echo "<br>";
while($row = $result2->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["first"]. " " . $row["last"]. " - Email: " . $row["email"]."<br>";
    }

$conn->close();
?> 

 </body>
</html>