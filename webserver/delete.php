<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$house_ID = $_GET['house_ID'];

//deleting the row from table
$sql = "DELETE FROM firsttable WHERE house_ID=$house_ID";
$result = $conn->query($sql);

//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>
