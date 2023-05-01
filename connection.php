
<?php
$server_name = '127.0.0.1';
$user_name = 'root';
$password = '';
$db_name = 'student_db';

// Enable strict mode for mysqli driver
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Create connection
$conn = new mysqli($server_name, $user_name, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// } else {
//     echo "Connected successfully";

// }

// Debugging statements
// echo "MySQL server version: " . $conn->server_info . "<br>";
// echo "MySQL host info: " . $conn->host_info . "<br>";
// echo "MySQL protocol version: " . $conn->protocol_version . "<br>";
// echo "MySQL client info: " . $conn->client_info . "<br>";
// echo "MySQL character set: " . $conn->character_set_name() . "<br>";
?>
