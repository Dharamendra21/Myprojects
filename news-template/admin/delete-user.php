<?php 

include 'config.php';
$user_id = $_GET['id'];

$sql = "DELETE FROM user WHERE user_id = '{$user_id}'";
if(mysqli_query($conn, $sql)){
    header("Location: users.php");
}else{
    echo "<p style='color:red; text-align:center; margin:10px 0;'>Cant\'t Delete the user Record</p>";
}
mysqli_close();
?>