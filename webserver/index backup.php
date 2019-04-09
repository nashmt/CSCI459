

<style>
  h1 {
    color: black;
    font-family: arial;
  }
 table {
  border-collapse: collapse;
  width: 40%;
  color: black;
  font-family: arial;
  font-size: 25px;
  text-align: left;
    }
 th {
  background-color: black;
  color: white;
   }
 tr:nth-child(even) {background-color: gray}
</style>

<head>
  <h1>Students</h1>
</head>


 <table>
 <tr>
  <th>Id</th>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Mail</th>
 </tr>

<a href="add.html"><strong>Add Student</strong></a> <br>
<a href="delete.php"><strong>Delete Student</strong></a>
<br>
<br>
</body>

<?php
$servername = "sample-database";
$username = "csci459";
$password = "csci459";
$dbname = "459db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, f_name, l_name, mail FROM firsttable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //output data of each row
    // while($row = $result->fetch_assoc()) {
    //     echo "id: " . $row["id"]. " -  Name: " . $row["f_name"]. " Last Name: " . $row["l_name"]. "<br>" .$row["mail"]. "<br>";
    // }

    while($row = $result->fetch_assoc()) {
     echo "<tr><td>" . $row["id"]. "</td><td>" . $row["f_name"] . "</td><td>". $row["l_name"] . "</td><td>" . $row["mail"] . "</td></tr>" ;
 }
 echo "</table>";

} else {
    echo "0 results";
}
$conn->close();
?>
