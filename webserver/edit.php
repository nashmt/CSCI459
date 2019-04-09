<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $f_name=$_POST['f_name'];
    $l_name=$_POST['l_name'];
    $mail=$_POST['mail'];    
    
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
    } else {    
        //updating the table
        $sql = "UPDATE firsttable SET f_name='$f_name',l_name='$l_name',mail='$mail' WHERE id=$id";
        $result = $conn->query($sql);
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$sql = "SELECT * FROM firsttable WHERE id=$id";
$result = $conn->query($sql);
 
while($res = mysqli_fetch_array($result))
{
    $f_name = $res['f_name'];
    $l_name = $res['l_name'];
    $mail = $res['mail'];
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
                <td>Name</td>
                <td><input type="text" name="f_name" value="<?php echo $f_name;?>"></td>
            </tr>
            <tr> 
                <td>Age</td>
                <td><input type="text" name="l_name" value="<?php echo $l_name;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="mail" value="<?php echo $mail;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>