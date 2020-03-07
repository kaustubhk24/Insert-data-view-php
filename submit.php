<?php


//MySQL connection      host   username  password  databasename
$conn = mysqli_connect("localhost", "root", "", "student");
 
// Check connection
if($conn === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security

$stu_name = mysqli_real_escape_string($conn, $_REQUEST['stu_name']);
$college = mysqli_real_escape_string($conn, $_REQUEST['college']);
$city = mysqli_real_escape_string($conn, $_REQUEST['city']);
$pincode = mysqli_real_escape_string($conn, $_REQUEST['pincode']);

// insert query execution

$sql = "INSERT INTO stud_table (stu_name, college, city,pincode) VALUES ('$stu_name', '$college', '$city','$pincode')";

//if successful
if(mysqli_query($conn, $sql))
{
    echo "<center>Records added successfully.<center>";
    echo '<br><br><center><a href=show.php>Show Data</a><center>';
    echo '<br><br><center><a href=index.html>Add New</a><center>';

}
//if error
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);


?>