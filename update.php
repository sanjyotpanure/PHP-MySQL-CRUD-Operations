<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update deatils</title>
    <?php include 'style.php'; ?>
</head>
<body>
    <?php 
        include 'dbcon.php'; 
        if (isset($_POST['submit'])) {
            $uid = $_SESSION['uid'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];

            $updatequery = " update info set fname='$fname', lname='$lname', email='$email' where id=$uid " ;
            $uquery = mysqli_query($con, $updatequery);
            if ($uquery) {
                echo "<h4 class='text-center' style='position:absolute; left: 40%; color:#fff; font-weight:bold;'>";
                echo "Data Updated Successfully!";
                echo "</h4>";
                
            }else{
                ?>
                    <script>alert("Data Updation Failed!!");</script>
                <?php
            }
        }
    ?>
    <div class="container">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="m-auto py-10">
            <h4 class="text-center">Update details for User ID: <a style="color: red; font-weight:bold;"><?php echo $_SESSION['uid']; ?></a></h4>
            <div class="input-group">
                <label>First Name</label>
                <input name="fname" type="text" placeholder="Enter first name">
            </div>
            <div class="input-group">
                <label>Last Name</label>
                <input name="lname" type="text" placeholder="Enter last name">
            </div> 
            <div class="input-group">
                <label>Email</label>
                <input name="email" type="email" placeholder="Enter Email">
            </div>
            <div class="input-group">
                <button type="submit" name="submit" class="btn btn-success btn-block">Update Details</button>
            </div>
        </form>
    </div>
</body>
</html>