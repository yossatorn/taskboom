<?php $link = mysql_connect('localhost', 'root'); ?>
<html>
<head>
	<title>Hello world!</title>
	<style>
	body {
		background-color: white;
		text-align: center;
		padding: 50px;
		font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
	}

	#logo {
		margin-bottom: 40px;
	}
	</style>
</head>
<body>
	<img id="logo" src="logo.png" />
	<h1><?php echo "Hello world!"; ?></h1>
	<?php if(!$link) { ?>
		<h2>Can't connect to local MySQL Server!</h2>
	<?php } else { ?>
		<h2>MySQL Server version: <?php echo mysql_get_server_info(); ?></h2>
	<?php } ?>
<?php
$servername = "localhost";
$username = "admin";
$password = "sceIk2heoaLN";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>
