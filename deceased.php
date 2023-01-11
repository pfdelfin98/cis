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
	text: 'You have successfuly added deceased person!'
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
 <h4>Manage Deceased Person</h4><hr>
    <div class="card">
        <div class="card-header">
            Deceased Person List
            <button class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#deceasedModal"><i class="fas fa-plus"></i> New Deceased Person</button>
        </div>
        <div class="card-body">
        <?php 
include 'db.php';
$pdo_statement = $pdo->prepare("SELECT * FROM tbl_deceased_persons");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>

    <table id="table" class="table table-bordered table-hover font-weight-normal" style="font-size:15px;">
    <thead>
	<tr>
    <th class="text-center">Image</th>
    <th class="text-center">Grave No.</th>
    <th class="text-center">Row</th>
    <th class="text-center">Full Name</th>
    <th class="text-center">Birth Date</th>
    <th class="text-center">Died Date</th>
    <th class="text-center">Action</th>

	</tr>
  </thead>
  <tbody id="table-body">
      <?php
if(!empty($result)) { 
foreach($result as $row) {

?>
 <tr class="table-row text-center">
        <td><?php echo '<img src="img/'.$row["grave_image"].'" style="width:100px;">' ; ?></td>
        <td><?php echo $row["grave_id"]; ?></td>
        <td><?php echo $row["grave_row"]; ?></td>
        <td><?php echo $row['firstname'].' '.$row['middlename'].' '.$row['lastname'] ?></td>
        <td><?php echo $row['birthdate']; ?></td>
        <td><?php echo $row['date_died']; ?></td>
        <td><button class="btn btn-primary"><i class="bx bx-edit"></i> Edit</button>
        <a href="function.php?delete_deceased" type="button" class="btn btn-danger" style="color:white;"><i class="bx bx-trash"></i> Delete</a></td>

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
