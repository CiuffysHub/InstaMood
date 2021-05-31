<?php

function login($username, $password){

	$conn = create_connection();

	$stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ? ");
	$stmt->bind_param("ss",$username,$password);

	$result = $stmt->execute();
	/* bind result variables */
    $stmt->bind_result($mail, $pwd);

    /* fetch values */
    while ($stmt->fetch()) {
        return True;
    }

    /* close statement */
    $stmt->close();
	return False;
}

function create_connection(){

	$servername = "31.11.39.15";
	$username = "Sql1495400";
	$password = "Al3ss106B3ll0!";

	// Create connection
	$conn = new mysqli($servername, $username, $password, 'Sql1495400_2');

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";

	return $conn;

}

?>