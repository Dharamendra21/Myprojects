<?php
    // Assign the database details to PHP variables
$servername = "localhost:3307";     // if the database is locally hosted
$username = "root";   // replace with your username
$password = "";   // replace with your password
$dbname = "news-cms"; // replace with your database name


// Create a new connection using the above details
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
   echo $conn->connect_error;
}else{
    echo "connected";
}


?>