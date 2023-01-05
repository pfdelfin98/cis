<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>

.topnav {
  overflow: hidden;
  background-color: #998370;
}
body{
  background-color: #998370;

}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #8b4513;
  color: white;
}

.topnav a.active {
  background-color: #8b4513;
  color: white;
}
</style>
</head>
<body>
<div class="topnav">
<img class="w-100" src="img/banner.png" alt="">
</div>
<div class="topnav shadow">
  <a href="home.php">Home</a>
  <a href="deceased_person.php">Deceased Person</a>
  <a href="contact.php">Contact Us</a>
  <a href="about.php">About Us</a>
  <a href="login.php">Admin Login</a>
</div>
<style>
 .col{
  display: flex;
  flex-direction: column;

 }
</style>
<div class="container-fluid mt-5">
<form class="form-inline" method="POST" action="deceased_person.php?search">
  <label class="my-1 mr-2 text-white" style="font-size:15px !important;" >Search Name:</label>
  <input type="text"  name="name" class="form-control" style="width:20rem;" placeholder="Type Name of Deceased Person">
  <button type="submit" class="btn btn-primary my-1 ml-3"><i class="fas fa-search"></i> Search</button>
</form>
<hr>
<div class="row mt-5 text-center">

   
  
</div>
</div>

</body>
</html>