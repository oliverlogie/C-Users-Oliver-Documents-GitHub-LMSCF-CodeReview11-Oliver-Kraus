<?php
ob_start();
// session_start();
require_once 'process/process_small.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['admin' ]) ) {
 header("Location: index.php");
 exit;
}
// select logged-in users details
$res=mysqli_query($connect, "SELECT * FROM users WHERE userId=".$_SESSION['admin']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<style>
   body, html {
  height: 100vh;
}
.background { 
  background-image: url("pic/admin.jpg");
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

  
}
</style>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<title>Welcome - <?php echo $userRow['userName' ]; ?></title>
</head>
<body >

<?php 

$connect = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$connect) {
 die("Connection failed: " . mysqli_connect_error() . "\n");
}

$sql = "SELECT * FROM Users";
$result = mysqli_query($connect, $sql);
?>
<div class="background">
            <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="admin.php">Welcome <?php echo $userRow['userName' ]; ?></a>
            <a class="navbar-brand" href="animals/small_animals.php">CRUD small Animals</a>
            <a class="navbar-brand" href="animals/large_animals.php">CRUD large Animals</a>
            <a class="navbar-brand" href="animals/senior_animals.php">CRUD senior Animals</a>
            <a href="logout.php?logout" class="navbar-brand" >Sign Out</a>
            </nav>


<div class="container">
  <h1 class="color-success text-center mt-5 text-white display-1">Hello allmighty Admin</h1>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
<?php ob_end_flush(); ?>