<html>
<head>
    <title>Add Data</title>
</head>

<body>

<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {
    // $house_ID = $_POST['house_ID'];
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


        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        // if all the fields are filled (not empty)
        //insert data to database
        //$result = mysqli_query($mysqli, "INSERT INTO firsttable(f_name,l_name,mail) VALUES('$f_name','$l_name','$mail')");

        $sql = "INSERT INTO 459db.firsttable(street, city, state, sq_ft, num_beds, num_baths) VALUES('$street', '$city', '$state', '$sq_ft', '$num_beds', '$num_baths')";
        $result = $conn->query($sql);

        //display success message
        echo "Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>
