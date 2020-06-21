<?php include("../includes/handlers/config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>attendance</title>

        <!--  Bootstrap  -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
 
    
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 


    <!-- Bootstarp ended -->

    <link rel="stylesheet" href="../admin/dashboard.css">


</head>
<style>
 
    /*    Add styles here  */
    form{
        margin-top:40px;
    }
    .form_row{
        position:relative;

    }
    .form_row input, select{
        padding-left:40px;
    }
    .form_row i{
        bottom:10px;
        position: absolute;
        padding-left:10px;
    }


</style> 
<body>

<!-- NavBar --> 

<div class="row">
<div class="col-lg-2">
<div id="navBarContainer">
    <nav class="navBar">
        <a href="index.php" class="logo">
            <img src="../img/user.png" style="width: 111px;margin-left: 27px;">
        </a>

        <div class="group">
            <div class="navItem">
            </div>
        </div>
        <div class="group">
            <div class="navItem" class="logo">
                <img src="../img/attendance.png" width=22px>
                <a href="../user/dashboard.php" class="navItemLink" style="text-decoration: none;">Attendance</a>
            </div>
          <!--  <div class="navItem" class="logo">
                <img src="../img/view.png" width=22px>
                <a href="../admin/viewAttendance.php" class="navItemLink" style="text-decoration: none;">View Attendance</a>
            </div> 
            <div class="navItem" class="logo">
            <img src="../img/employee.png" width=22px>
                <a href="../admin/employee.php" class="navItemLink" style="text-decoration: none;">Employees</a>
            </div>
            <div class="navItem" class="logo">
            <img src="../img/employee2.png" width=22px>
                <a href="../admin/admin.php" class="navItemLink" style="text-decoration: none;">Admin</a>
            </div>  -->
            <div class="navItem" class="logo">
            <img src="../img/graph.png" width=22px>
                <a href="../user/viewInsights.php" class="navItemLink" style="text-decoration: none;">View Insights</a>
            </div>
            <div class="navItem" class="logo">
            <img src="../img/view.png" width=22px>
                <a href="../user/profileUser.php" class="navItemLink" style="text-decoration: none;">Your Profile</a>
            </div>
            <div class="navItem" class="logo">
            <img src="../img/logout.png" width=22px>
                <a href="../logout.php" class="navItemLink" style="text-decoration: none;">Logout</a>
            </div>
        </div>


    </nav>
</div>
</div>


    <!-- NavBar ends-->

<div class="col-lg-10">
<div id="mainContainer" style="margin:auto 250px; width:50%;">



<!-- Profile of the comes here -->






</div>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<?php include("../footer.php"); ?>
