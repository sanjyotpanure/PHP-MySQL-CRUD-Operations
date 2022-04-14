<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <?php include 'style.php'; ?>
</head>
<body>
    <?php 
        include 'dbcon.php';
        
        if (isset($_POST['update_by_id'])) {

            $uid = $_POST['userid'];

            $id_check = " select * from info where id='$uid' ";
            $query = mysqli_query($con, $id_check);

            if ($query) {
                $id = mysqli_fetch_assoc($query);

                $_SESSION['uid'] = $id['id'];
                header('location: update.php');
            }else {
                ?> <script>alert("Id Not Found!");</script> <?php
            }
        }  
    ?>

    <div class="container-fluid">
        <h4 class="text-center py-2" style="color:#fff; font-size:40px; font-weight:bold;">Dynamic web application using PHP and MySQL</h4>
        <div class="row ml-auto">
            <div class="col-lg-4 col-md-4 col-12 pb-5">
                <form action="delete.php" class="text-center" method="POST">
                    <h4 >Delete details from the table</h4>
                    <p>Delete details by User ID </p>
                    <div class="input-group">
                        <label >User ID</label>
                        <input type="number" name="uid" placeholder="Enter User ID" required>
                    </div>
                    <p class="text-center" style="color:red;">*User ID is allocated by default (starting from 1)</p>
                    <div class="input-group">
                        <button type="submit" name="add" class="btn btn-danger btn-block">Delete Details</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-md-4 col-12 pb-5">
                <form action="add.php" method="POST">
                    <h4 class="text-center">Add details into the table</h4>
                    <div class="input-group">
                        <label>First Name</label>
                        <input name="fname" type="text" placeholder="Enter first name" required>
                    </div>
                    <div class="input-group">
                        <label>Last Name</label>
                        <input name="lname" type="text" placeholder="Enter last name" required>
                    </div> 
                    <div class="input-group">
                        <label>Email</label>
                        <input name="email" type="email" placeholder="Enter Email">
                    </div>
                    <div class="input-group">
                        <button type="submit" name="add" class="btn btn-success btn-block">Add Details</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-md-4 col-12 pb-5">
            <form align="center" action="retrieve.php" method="POST" >
                    <h4 class="text-center">Get details from the table</h4>
                    <p>Get details by User ID </p>
                    <div class="input-group">
                        <label >User ID</label>
                        <input type="number" name="userid" placeholder="Enter User ID" required>
                    </div>
                    <p class="text-center" style="color:red;">*User ID is allocated by default (starting from 1)</p>
                    <div class="input-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Get Details</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 pb-5">            
                <form align="center" name="form2" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="m-auto">
                    <h4 class="text-center">Update details in the table</h4>
                    <p>Update details by User ID </p>
                    <div class="input-group">
                        <label >User ID</label>
                        <input type="number" name="userid" placeholder="Enter User ID" required>
                    </div>
                    <p class="text-center" style="color:red;">*User ID is allocated by default (starting from 1)</p>
                    <div class="input-group">
                    <button type="submit" name="update_by_id" class="btn btn-dark btn-block">Update Details</button>
                    </div>
                    </div>
                </form>                
            </div>
        </div>
    </div>
</body>
</html>