<?php include 'header.php';?>
 <!-- 
    Body Starts Here
  -->
 <div class="container-fluid mt-4 pt-3 pl-5 pr-5">
 <?php
 if(isset($_GET['1'])){
    echo "
<script>
swal({
	icon: 'success',
	title: 'Success!',
	text: 'You have successfuly added user!'
  }).then(function() {
    window.location = 'deceased.php';
  });
  
  </script>";
 }
 ?>  
<style>
    button:hover{
        color:white !important;
    }
</style>
 <h4>Manage User</h4><hr>
    <div class="card">
        <div class="card-header">
            User List
            <button class="btn btn-success float-right" data-toggle="modal" data-target="#userModal"><i class="fas fa-plus"></i> New User</button>

        </div>
        <div class="card-body">
        <?php 
include 'db.php';
$pdo_statement = $pdo->prepare("Select * from tbl_login");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>

    <table id="table" class="table table-bordered table-hover font-weight-normal" style="font-size:15px;">
    <thead>
	<tr>
    <th class="text-center">User ID</th>
    <th class="text-center">Full Name</th>
    <th class="text-center">Username</th>
    <th class="text-center">Role</th>
    <th class="text-center">Action</th>
	</tr>
  </thead>
  <tbody id="table-body">
      <?php
if(!empty($result)) { 
foreach($result as $row) {

?>
 <tr class="table-row text-center">
         <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row['fullname'];?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['type']; ?></td>
        <td><button class="btn btn-primary"><i class="bx bx-edit"></i> Edit</button>
        <a href="function.php?delete_user" type="button" class="btn btn-danger" style="color:white;"><i class="bx bx-trash"></i> Delete</a></td>

<?php
}
}
?>
    </table>

        </div>
    </div>
 </div>
 <!-- 
    Body Ends Here
  -->
<?php include 'footer.php';?>
