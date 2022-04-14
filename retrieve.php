<?php
include 'dbcon.php';
include 'style.php';

$userid = $_POST['userid'];

$sql="SELECT * FROM info WHERE id='$userid' ";
$result=mysqli_query($con,$sql);
if(!($result)){
    echo"Sorry no data found.";
}
else{
    $num_row=mysqli_num_rows($result);
    echo "<h2>";
    echo " $num_row records found in the Database<br>";
    echo "</h2>";
}
for($i=0;$i<$num_row;$i++){
    $fetch=mysqli_fetch_row($result);
    echo "<h3 class='px-5'>";
    echo  "Id: ".$fetch[0];
    echo "<br>";
    echo  "First Name: ".$fetch[1];
    echo "<br>";
    echo  "Last Name: ".$fetch[2];
    echo "<br>";
    echo  "Email: ".$fetch[3];
    echo "<br>";
    echo "</h3>";
}
?>