<?php

include 'dbcon.php';
include 'style.php';

$uid = $_POST['uid'];

$sql = " DELETE FROM info WHERE id=$uid ";

$result = mysqli_query($con, $sql);
if(!($result)){
    echo" Sorry no data found.";
}
else{
    echo "<h2>";
    echo "Record with User ID $uid deleted successfully!!!";
    echo "</h2>";
}
?>