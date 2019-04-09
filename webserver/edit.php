<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{
  $street = $_POST['street'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $sq_ft = $_POST['sq_ft'];
  $num_beds = $_POST['num_beds'];
  $num_baths = $_POST['num_baths'];

    // checking empty fields
    if(empty($street) || empty($city) || empty($state) || empty($sq_ft) || empty($num_beds) || empty($num_baths)) {

        if(empty($street)) {
            echo "<font color='red'>Street field is empty.</font><br/>";
        }

        if(empty($city)) {
            echo "<font color='red'>City field is empty.</font><br/>";
        }

        if(empty($state)) {
            echo "<font color='red'>State field is empty.</font><br/>";
        }

        if(empty($sq_ft)) {
            echo "<font color='red'>Square Feet field is empty.</font><br/>";
        }

        if(empty($num_beds)) {
            echo "<font color='red'>Num Beds field is empty.</font><br/>";
        }
        if(empty($num_baths)) {
            echo "<font color='red'>Num Baths field is empty.</font><br/>";
        }
    } else {
        //updating the table

        $sql = "UPDATE firsttable SET street='$street',city='$city',state='$state' ,sq_ft='$sq_ft' ,num_beds='$num_beds' ,num_baths='$num_baths' WHERE house_ID=$house_ID";
        $result = $conn->query($sql);

        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$house_ID = $_GET['house_ID'];

//selecting data associated with this particular id
$sql = "SELECT * FROM firsttable WHERE house_ID=$house_ID";
$result = $conn->query($sql);

while($res = mysqli_fetch_array($result))
{
  $street = $_POST['street'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $sq_ft = $_POST['sq_ft'];
  $num_beds = $_POST['num_beds'];
  $num_baths = $_POST['num_baths'];
}
?>
<html>
<head>
    <title>Edit Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="form1" method="post" action="edit.php">
        <table border="0">

            <tr>
                <td>House ID</td>
                <td><input type="text" name="house_ID" value="<?php echo $house_ID;?>"></td>
            </tr>
            <tr>
                <td>Street</td>
                <td><input type="text" name="street" value="<?php echo $street;?>"></td>
            </tr>
            <tr>
                <td>City</td>
                <td><input type="text" name="city" value="<?php echo $city;?>"></td>
            </tr>
            <tr>
                <td>State</td>
                <td><input type="text" name="state" value="<?php echo $state;?>"></td>
            </tr>
            <tr>
                <td>Square Feet</td>
                <td><input type="text" name="sq_ft" value="<?php echo $sq_ft;?>"></td>
            </tr>
            <tr>
                <td>Num Beds</td>
                <td><input type="text" name="num_beds" value="<?php echo $num_beds;?>"></td>
            </tr>
            <tr>
                <td>Num Baths</td>
                <td><input type="text" name="num_baths" value="<?php echo $num_baths;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="$house_ID" value=<?php echo $_GET['$house_ID'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table> 
    </form>
</body>
</html>
