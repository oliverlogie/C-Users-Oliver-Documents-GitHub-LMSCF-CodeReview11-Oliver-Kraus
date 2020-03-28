<?php
ob_start();
// session_start();
require_once '../process/process_small.php';

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
  background-image: url("../pic/admin.jpg");
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
img{
  height: 100px;
  length: 100px;
}
</style>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<title>Welcome - <?php echo $userRow['userName' ]; ?></title>
</head>
<body class="background text-white">
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

$sql = "SELECT * FROM Users";
$result = mysqli_query($connect, $sql);
?>

            <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="../admin.php">Welcome <?php echo $userRow['userName' ]; ?></a>
            <a class="navbar-brand" href="../animals/small_animals.php">CRUD small Animals</a>
            <a class="navbar-brand" href="../animals/large_animals.php">CRUD large Animals</a>
            <a class="navbar-brand" href="../animals/senior_animals.php">CRUD senior Animals</a>
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
  <div class="row justify-content-center border border-white mt-5 mb-5">
    <h1 class="display-3">Small animals table</h1>
    <table class="table text-white">
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
  <tr clss="text-white">
    <td><?php echo $row['location']; ?></td>
    <td><img src="<?php echo $row['image']; ?>" alt="dog <?php echo $row['name']; ?>"></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['description']; ?></td>
    <td><?php echo $row['website']; ?></td>
    <td>
    <a href="small_animals.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary" >Edit</a>
      <a href="small_animals.php?delete=<?php echo $row['id']; ?>" class="btn btn-info" >Delete</a>
    </td>
  </tr>
  <?php endwhile; ?>
    </table>
  </div>
</div>

<form action="../process/process_small.php" method ="post" class="border text-center mr-5 ml-5">
    <h1 class="display-4">Edit small animals table</h1>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
   <p>
       <label  for="firstName">Location:</label>
       <input type="text" name= "location" id="location" value="<?php echo $Location; ?>">
   </p>
   <p>
       <label for ="lastName">Image:</label>
       <input  type="text" name="image"  id="image" value="<?php echo $Image; ?>">
   </p>
   <p>
       <label for= "emailAddress">Name:</label>
       <input  type="text" name= "name" id="name" value="<?php echo $Name; ?>">
   </p>
   <p>
       <label for= "emailAddress">Description:</label>
       <input  type="text" name= "description" id="description" value="<?php echo $Desc; ?>">
   </p>
   <p>
       <label for= "emailAddress">Website:</label>
       <input  type="text" name= "website" id="website" value="<?php echo $Website; ?>">
   </p>
   <?php 
   if ($update == true):
   ?>
   <button type= "submit" name="update" class="btn btn-info">Update</button>
   <?php else: ?>
   <button type= "submit" name="save" class="btn btn-success">Save</button>
   <?php endif; ?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
<?php ob_end_flush(); ?>