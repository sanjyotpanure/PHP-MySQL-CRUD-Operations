<?php 
    session_start();
    include 'dbcon.php';
        
    if (isset($_POST['add'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
            
        $insertquery = " insert into info(fname, lname,  email) 
        values('$fname','$lname','$email') ";

        $iquery = mysqli_query($con, $insertquery);

        if ($iquery) {
            ?>
                <script>alert("Data Inserted Successfully");</script>
            <?php
            header('location: index.php');
        }else{
            ?>
                <script>alert("Data Insertion Failed!!");</script>
            <?php
        }
    }
?>
