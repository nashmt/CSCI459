<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  padding-left: 5%;
  padding-right: 5%;
}

/* The grid: Three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 50px;
  text-align: center;
  font-size: 25px;
  cursor: pointer;
  color: white;
}

.containerTab {
  padding: 20px;
  color: white;
  padding-bottom: 5px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  padding-top:25px;
}

/* Closable button inside the container tab */
.closebtn {
  float: right;
  color: white;
  font-size: 35px;
  cursor: pointer;
}

.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content */
.tabcontent {
  color: white;
  display: none;
  padding: 50px;
  text-align: center;
}

#London {background-color:gray;}
#Paris {background-color:gray;}
#Tokyo {background-color:gray;}
#Oslo {background-color:gray;} */

h1 {
  color: black;
  font-family: arial;
}
table {
border-collapse: collapse;
width: 100%;
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

<div id="London" class="tabcontent">
  <h1>Property Manager App</h1>
  <p>Best thing for renters</p>
</div>

<div id="Paris" class="tabcontent">
  <h1>Property Manager App</h1>
  <p>Best thing for renters</p>
</div>

<div id="Tokyo" class="tabcontent">
  <h1>Property Manager App</h1>
  <p>Best thing for renters</p>
</div>

<div id="Oslo" class="tabcontent">
  <h1>Property Manager App</h1>
  <p>Best thing for renters</p>
</div>

<button class="tablink" onclick="openCity('London', this, 'black')" id="defaultOpen">Home</button>
<button class="tablink" onclick="openCity('Paris', this, 'black')">Houses</button>
<button class="tablink" onclick="openCity('Tokyo', this, 'black')">Sort</button>
<button class="tablink" onclick="openCity('Oslo', this, 'black')">About Us</button>
</head>

<body>

<table>
<tr>
 <th>ID  </th>
 <th>Street    </th>
 <th>City     </th>
 <th>State</th>
 <th>Square Feet</th>
 <th>Num Beds</th>
 <th>Num Baths</th>

<!--   added for the second version-->
 <th>Update    </th>
</tr>

<a href="add.html"><strong>Add Property</strong></a> <br>
<!-- <a href="delete.php"><strong>Delete Student</strong></a> -->
<br>
<br>
<!-- Data From DB (PHP) -->

</body>
<?php
//including the database connection file
include_once("config.php");


$sql = "SELECT * FROM firsttable";
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
            echo "<td>".$res['house_ID']."</td>";
            echo "<td>".$res['street']."</td>";
            echo "<td>".$res['city']."</td>";
            echo "<td>".$res['state']."</td>";
            echo "<td>".$res['sq_ft']."</td>";
            echo "<td>".$res['num_beds']."</td>";
            echo "<td>".$res['num_baths']."</td>";
            echo "<td><a href=\"edit.php?id=$res[house_ID]\">Edit   </a> | <a href=\"delete.php?id=$res[house_ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete  </a></td>";
        }

 echo "</table>";

} else {
    echo "0 results";
}
$conn->close();
?>
<!-- Three columns -->
<!-- <div class="row">
  <div class="column" onclick="openTab('b1');" style="background:#21AAAA;">
    House 1
  </div>
  <div class="column" onclick="openTab('b2');" style="background:blue;">
    House 2
  </div>
  <div class="column" onclick="openTab('b3');" style="background:#ffa153;">
    House 3
  </div>
</div> -->

<!-- Full-width columns: (hidden by default) -->
<!-- <div id="b1" class="containerTab" style="display:none;background:#21AAAA;">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Information on House 1</h2>
  <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>
</div>

<div id="b2" class="containerTab" style="display:none;background:blue">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Information on House 2</h2>
  <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>
</div> -->

<!-- <div id="b3" class="containerTab" style="display:none;background:#ffa153;">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Information on House 3</h2>
  <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>
</div> -->
<!-- First row + expandable  -->

<!-- Second Row  -->

<!-- <div class="row">
  <div class="column" onclick="openTab('b4');" style="background:#21AAAA;">
    House 4
  </div>
  <div class="column" onclick="openTab('b5');" style="background:blue;">
    House 5
  </div>
  <div class="column" onclick="openTab('b6');" style="background:#ffa153;">
    House 6
  </div>
</div> -->

<!-- Full-width columns: (hidden by default) -->
<!-- <div id="b4" class="containerTab" style="display:none;background:#21AAAA;">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Information on House 4</h2>
  <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>
</div>

<div id="b5" class="containerTab" style="display:none;background:blue">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Information on House 5</h2>
  <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>
</div>

<div id="b6" class="containerTab" style="display:none;background:#ffa153">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Information on House 6</h2>
  <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>
</div> -->

<!-- Second row + expandible  -->

<!-- Third Row  -->

<!-- <div class="row">
  <div class="column" onclick="openTab('b7');" style="background:#21AAAA;">
    House 7
  </div>
  <div class="column" onclick="openTab('b8');" style="background:blue;">
    House 8
  </div>
  <div class="column" onclick="openTab('b9');" style="background:#ffa153;">
    House 9
  </div>
</div> -->

<!-- Full-width columns: (hidden by default) -->
<!-- <div id="b7" class="containerTab" style="display:none;background:#21AAAA;">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Information on House 7</h2>
  <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>
</div>

<div id="b8" class="containerTab" style="display:none;background:blue">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Information on House 8</h2>
  <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>
</div>

<div id="b9" class="containerTab" style="display:none;background:#ffa153">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Information on House 9</h2>
  <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>
</div> -->

<!-- Third Row + Expaidible  -->

<!-- Fourth row  -->

<!-- <div class="row">
  <div class="column" onclick="openTab('b10');" style="background:#21AAAA;">
    House 10
  </div>
  <div class="column" onclick="openTab('b11');" style="background:blue;">
    House 11
  </div>
  <div class="column" onclick="openTab('b12');" style="background:#ffa153;">
    House 12
  </div>
</div> -->

<!-- Full-width columns: (hidden by default) -->
<!-- <div id="b10" class="containerTab" style="display:none;background:#21AAAA">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Information on House 10</h2>
  <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>
</div>

<div id="b11" class="containerTab" style="display:none;background:blue">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Information on House 11</h2>
  <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>
</div>

<div id="b12" class="containerTab" style="display:none;background:#ffa153">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Information on House 12</h2>
  <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>
</div> -->

<!-- Fourt row + Expadible  -->

<script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}

function openCity(cityName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(cityName).style.display = "block";
  elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>

</html>
