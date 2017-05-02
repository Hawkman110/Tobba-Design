<?php
$servername = "10.200.10.24";
$username = "1801993229";
$password = "Thehawk110";
$dbname = "1801993229_tobbadesign";
$nafn = $_POST['nafn'];
$mynd = $_POST['mynd'];
$uplisingar = $_POST['uplisingar'];
$verd = $_POST['verd'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO eyrnalokkar (nafn, mynd, uplisingar, verd)
VALUES (\"$nafn\", \"$mynd\", \"$uplisingar\", \"$verd\" )";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	echo "<a href=\"http://tsuts.tskoli.is/2t/1801993229/TobbaD/eyrnalokkar.php\">Fara til baka hérna</a>";

} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>