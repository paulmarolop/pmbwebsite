<?php

$conn = new mysqli("localhost", "root", "", "himsiuns_minatbakat20");

if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
}

?>