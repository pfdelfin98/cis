<?php include 'header.php';?>
 <!-- 
    Body Starts Here
  -->
 <div class="container-fluid mt-4 pt-3 pl-5 pr-5">
 <?php
 if(isset($_GET['success'])){
    echo "
<script>
swal({
	icon: 'success',
	title: 'Success!',
	text: 'You have successfuly login!'
  });
  
  </script>";
 }
 ?>  

 <h4>Dashboard</h4><hr>

 </div>
 <!-- 
    Body Ends Here
  -->
<?php include 'footer.php';?>
