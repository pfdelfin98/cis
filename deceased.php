<?php include 'header.php';?>
 <!-- 
    Body Starts Here
  -->
 <div class="container-fluid mt-4 pt-3 pl-5 pr-5">
   

 <h4>Manage Deceased Person</h4><hr>
    <div class="card">
        <div class="card-header">
            Deceased Person List
            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#deceasedModal"><i class="fas fa-plus"></i> New Deceased Person</button>
        </div>
        <div class="card-body">
        <?php 
// include 'config.php';
// $pdo_statement = $pdo->prepare("");
// $pdo_statement->execute();
// $result = $pdo_statement->fetchAll();
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

	</tr>
  </thead>
  <tbody id="table-body">
      <?php
if(!empty($result)) { 
foreach($result as $row) {

?>
 <tr class="table-row text-center">
         <td><?php echo $row["image"]; ?></td>
        <td><?php echo $row["grave_no"]; ?></td>
        <td><?php echo $row["row_no"]; ?></td>
        <td><?php echo $row['firstname'].' '.$row['middlename'].' '.$row['lastname'] ?></td>
        <td><?php echo $row['birthdate']; ?></td>
        <td><?php echo $row['died_date']; ?></td>

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