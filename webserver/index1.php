

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
  <th>Id  </th>
  <th>First Name    </th>
  <th>Last Name     </th>
  <th>Mail</th>
<!--   added for the second version-->  
  <th>Update    </th>
 </tr>

<a href="add.html"><strong>Add Student</strong></a> <br>
<!-- <a href="delete.php"><strong>Delete Student</strong></a> -->
<br>
<br>
</body>

<?php
//including the database connection file
include_once("config.php");


$sql = "SELECT id, f_name, l_name, mail FROM firsttable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //output data of each row
    // while($row = $result->fetch_assoc()) {
    //     echo "id: " . $row["id"]. " -  Name: " . $row["f_name"]. " Last Name: " . $row["l_name"]. "<br>" .$row["mail"]. "<br>";
    // }

  //  while($row = $result->fetch_assoc()) {
 //    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["f_name"] . "</td><td>". $row["l_name"] . "</td><td>" . $row["mail"] . "</td></tr>" ; 
 //}

  //--------------version 2 (added update: edit + delete)------------------
  while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['id']."</td>";
            echo "<td>".$res['f_name']."</td>";
            echo "<td>".$res['l_name']."</td>";
            echo "<td>".$res['mail']."</td>";    
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit   </a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete  </a></td>";        
        }

 echo "</table>";

} else {
    echo "0 results";
}
$conn->close();
?>
