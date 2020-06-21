<?php 

session_start();
$emailUser = $_SESSION['userLoggedIn'];
$organisationId=$_SESSION['organisationId'];
echo $emailUser;
echo "<br>";
echo $organisationId;

?>
<head>
    <title>BeingThere - View Attendance</title>
</head>
<?php include("../header.php"); ?>
<?php include("../includes/handlers/config.php"); ?>


<style>
        body{
            color:black;
        }
      .mdc-data-table{  
         width: 167%;
         margin-left: -848px;
         margin-top:100px;
        }
        .dataTables_wrapper > .mdc-layout-grid{
         margin-left:463px;
        }
        .form-inline label{
           /* position: absolute;
            left: 1224px; */
        }
        .dataTables_wrapper{
            margin-top:100px;
        }
</style>

<div id="mainContainer">

    <h2 class="display-4" style="text-align:center;margin:10px;">View Attendance</h2>

    <table id="example" class="table table-striped table-bordered " cellspacing="0"   style="
        margin-left:18px;
        margin-top:100px;
        width: 99%;">
        <thead>
            <tr>
                <th>Employee Id</th>
                <th>Name</th>
                <th>Attendance</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>
            <?php 

                $query=mysqli_query($con,"SELECT * FROM attendance_taken WHERE organisation='$organisationId'");
                while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $row['eid']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td>
                    <?php 

                        if($row['attendance']=="Present"){
                            echo "<button type='button' class='btn btn-success'>".$row['attendance']."</button>";
                        } 
                        else{
                            echo "<button type='button' class='btn btn-danger'>".$row['attendance']."</button>";
                        }    
                        
                    ?>
                </td>
                <td><?php echo $row['date']; ?></td>
            </tr>
        <?php }  ?>
    </table>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script>
   
          /* $(document).ready(function() {
                $('#example').DataTable( {
                    autoWidth: false,
                    columnDefs: [
                        {
                            targets: ['_all'],
                            className: 'mdc-data-table__cell'
                        }
                    ]
                } );
            } ); */


    $(document).ready(function() {
        $('#example').DataTable();
            } );
</script>  

<?php include("../footer.php"); ?>