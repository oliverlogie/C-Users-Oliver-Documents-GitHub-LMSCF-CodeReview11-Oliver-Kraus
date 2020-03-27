<?php
ob_start();
//session_start();
require_once '../process/process_small.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user' ]) ) {
 header("Location: ../index.php");
 exit;
}
// select logged-in users details
$res=mysqli_query($connect, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<style>
   body, html {
  height: 100vh;
}
.background { 
  background-image: url("../pic/user.jpg");
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
<body class="background">
<?php 

if (isset($_SESSION['message'])):?>

<div class ="alert alert-<?= $_SESSION['msg_type'] ?>">
  <?php 
  echo $_SESSION['message'];
  ?>
</div>
<?php endif ?>

<?php 

$connect = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$connect) {
 die("Connection failed: " . mysqli_connect_error() . "\n");
}

$sql = "SELECT * FROM users";
$result = mysqli_query($connect, $sql);
?>

<nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="../home.php">Welcome <?php echo $userRow['userName']; ?></a>
            <a href="" class="navbar-brand" >Small & Big animals</a>
            <a href="senior.php" class="navbar-brand" >Senior animals</a>
            <a href="../logout.php?logout" class="navbar-brand" >Sign Out</a>
            </nav>
  <?php 

$connect = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$connect) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}

$sql = "SELECT * FROM small_animals";
$result = mysqli_query($connect, $sql);
?>
<div class="container">
  <div class="row justify-content-center border border-dark mt-5">
  <h1 class="display-4">Small animals</h1>
    <table class="table">
      <thead>
        <tr>
          <th>Location</th>
          <th>Image</th>
          <th>Name</th>
          <th>Description</th>
          <th>Website</th>
        </tr>
      </thead>

  <?php 
  while ($row = $result-> fetch_assoc()): 
  ?>
  <tr>
    <td><?php echo $row['location']; ?></td>
    <td><img src="<?php echo $row['image']; ?>" alt="dog"></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['description']; ?></td>
    <td><?php echo $row['website']; ?></td>
  </tr>
  <?php endwhile; ?>
    </table>
  </div>
</div>
<?php 

$connect = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$connect) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}

$sql = "SELECT * FROM large_animals";
$result = mysqli_query($connect, $sql);
?>
<div class="container">
  <div class="row justify-content-center border border-dark mt-5">
  <h1 class="display-4">big animals</h1>
    <table class="table">
      <thead>
        <tr>
          <th>Location</th>
          <th>Image</th>
          <th>Name</th>
          <th>Description</th>
          <th>Hobbies</th>
        </tr>
      </thead>

  <?php 
  while ($row = $result-> fetch_assoc()): 
  ?>
  <tr>
    <td><?php echo $row['location']; ?></td>
    <td><img src="<?php echo $row['image']; ?>" alt="dog"></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['description']; ?></td>
    <td><?php echo $row['hobbies']; ?></td>
  </tr>
  <?php endwhile; ?>
    </table>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
<?php ob_end_flush(); ?>