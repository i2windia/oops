<?php
include_once 'dbMySql.php';
$con = new DB_con();

// data insert code starts here.
if(isset($_POST['btn-save']))
{
 $fname = $_POST['first_name'];
 $lname = $_POST['last_name'];
 $city = $_POST['city_name'];
 
 $con->insert($fname,$lname,$city);
 header("Location: index.php");
}
// data insert code ends here.

?>
<html>
<head>
<body>
<form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="City" /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
</form>
</body>
</html>