<html>
<head>
    <title>Add Data</title>
</head>
 
<body>

<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {   
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $mail = $_POST['mail'];
        
    // checking empty fields
    if(empty($f_name) || empty($l_name) || empty($mail)) {                
        if(empty($f_name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($l_name)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
        if(empty($mail)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        //$result = mysqli_query($mysqli, "INSERT INTO firsttable(f_name,l_name,mail) VALUES('$f_name','$l_name','$mail')");

        $sql = "INSERT INTO firsttable(f_name,l_name,mail) VALUES('$f_name','$l_name','$mail')";
        $result = $conn->query($sql);
        
        //display success message
        echo "Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>

