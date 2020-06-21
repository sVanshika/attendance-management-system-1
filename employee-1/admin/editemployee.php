
<?php include("../includes/handlers/config.php"); ?>
<?php include("../header.php"); ?>

<div id="mainContainer">

<?php 

session_start();
$emailUser = $_SESSION['userLoggedIn'];
$organisationId=$_SESSION['organisationId'];
echo $emailUser;
echo "<br>";
echo $organisationId;

?>

<h2 style="text-align:center;margin:10px;">View Attendance</h2>

		
<table id="example" class="table table-striped table-bordered" cellspacing="0"   style="margin-left: 9px;
    margin-top:100px;
    width: 99%;">
   <thead>
      <tr>
        <th>Emp_Id</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Date of Birth</th>
        <th>Contact No</th>
        <th>Department</th>
      </tr>
    </thead>
    <tbody>
		
  <form action="" method="post">
<?php

$edit_id = $_GET['edit'];


$query = mysqli_query($con,"SELECT * FROM `employee_details` WHERE eid='$edit_id' AND organisation='$organisationId' ");


while($row=mysqli_fetch_assoc($query)) {
  
   ?>
   
   

      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><input type="text" name="name" class="form-control" id="formGroupExampleInput" value="<?php echo $row['name']; ?>" placeholder="name"></td></td>
        <td><input type="text" name="gender" class="form-control" id="formGroupExampleInput" value="<?php echo $row['gender']; ?>" placeholder="name"></td></td>
		<td><input type="text" name="email" class="form-control" id="formGroupExampleInput" value="<?php echo $row['email']; ?>" placeholder="name"></td></td>
		<td><input type="text" name="dateofbirth" class="form-control" id="formGroupExampleInput" value="<?php echo $row['DOB']; ?>" placeholder="name"></td></td>
		<td><input type="text" name="contact_no" class="form-control" id="formGroupExampleInput" value="<?php echo $row['contact_no']; ?>" placeholder="name"></td></td>
		<td><input type="text" name="department" class="form-control" id="formGroupExampleInput" value="<?php echo $row['department']; ?>" placeholder="name"></td></td>
      </tr>
    
   
  
      
        
     
 
    
      
           
      
<?php } ?>    
     </tbody>
    </table>
	<div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg "  name="update" value="update" style="position: absolute;
    left: 822px;
    margin-top: 23px;">update</button>
  </div>
   </form>
  </div>
</div>

  

<?php
if(isset($_POST['update'])) {


      $update_id = $_GET['edit'];
    
      $name =  $_POST["name"];
      $gender  = $_POST['gender'];
      $email  = $_POST['email'];
      $DOB  = $_POST['dateofbirth'];
      $contact  = $_POST['contact_no'];
      $department = $_POST['department'];
      
    
    
    if (mysqli_query($con,"UPDATE `employee_details` SET `name`='$name',`gender`='$gender',`email`='$email',`DOB`='$DOB',`contact_no`='$contact',`department`='$department' WHERE eid='$update_id' AND organisation='$organisationId'"))
      {
        ?>
      <script>
        
        if(!alert('Employee details updated successfully.')){window.location = "employee.php";}
      </script>
      <?php
          } 
      else {
        ?>
        <script>
              if(!alert("Can't update Employee details.Some error occured")){window.location = "employee.php";}
      
        </script>
      <?php
      }
      

 
  
  }

?>

</div>

<?php include("../footer.php"); ?>