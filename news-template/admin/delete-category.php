<?php 

include 'config.php';
$cat_id = $_GET['id'];

$sql = "DELETE FROM category WHERE category_id = '{$cat_id}'";
if(mysqli_query($conn, $sql)){
    header("Location: category.php");
}else{
    echo "<p style='color:red; text-align:center; margin:10px 0;'>Cant\'t Delete the user Record</p>";
}
mysqli_close();
?>