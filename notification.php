<?php include 'header.php';?>
 <!-- 
    Body Starts Here
  -->
 <div class="container-fluid mt-4 pt-3 pl-5 pr-5">
   

 <h4>Manage Deceased Person</h4><hr>
    <div class="card">
        <div class="card-header">
            Deceased Person List
        </div>
        <div class="card-body">
<?php
include 'db.php';
$pdo_statement = $pdo->prepare("SELECT * FROM `tbl_deceased_persons` WHERE `date_died` > DATE_SUB(CURDATE(), INTERVAL 5 YEAR)"); # Select Deceased Person 
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

	</tr>
  </thead>
  <tbody id="table-body">
      <?php
if(!empty($result)) { 
    foreach($result as $row) {

?>
 <tr class="table-row text-center">

        <td><?php echo $row["grave_image"]; ?></td>
        <td><?php echo $row["grave_id"]; ?></td>
        <td><?php echo $row["grave_row"]; ?></td>
        <td><?php echo $row['firstname'].' '.$row['middlename'].' '.$row['lastname'] ?></td>
        <td><?php echo $row['birthdate']; ?></td>
        <td><?php echo $row['date_died']; ?></td>

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
