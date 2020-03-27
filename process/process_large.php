<?php 

session_start();
$Location = '';
$Image = '';
$Name = '';
$Desc = '';
$Hobbies = '';
$update = false;
$id = 0;

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "cr11_oliver_kraus_petadoption";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}
if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$connect->query("DELETE FROM `large_animals` WHERE `large_animals`.`id`=$id") or die($connect->error());
	unset($_SESSION['message']);
	$_SESSION['message'] = "Record has been deleted";
	$_SESSION['msg_type'] = "danger";

	header("location: ../animals/large_animals.php");
		
}
if (isset($_POST['save'])){
	$location = $_POST['location'];
	$image = $_POST['image'];
	$name = $_POST['name'];
	$desc = $_POST['description'];
    $hobbies = $_POST['hobbies'];

	$connect->query("INSERT INTO large_animals (`location`, `image`, `name`, `description`,hobbies)
	VALUES ('$location', '$image', '$name', '$desc','$hobbies')");
	unset($_SESSION['message']);
	$_SESSION['message'] = "Record has been saved";
	$_SESSION['msg_type'] = "success";

	header("location: ../animals/large_animals.php");
}
if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $connect->query("SELECT * FROM `large_animals` WHERE `large_animals`.`id`=$id") or die($connect->error());
	if ($result->num_rows){
		$row = $result->fetch_array();
		$Location = $row['location'];
		$Image = $row['image'];
		$Name = $row['name'];
		$Desc =	$row['description'];
        $Hobbies = $row['hobbies'];
	}
}
if (isset($_POST['update'])){
	$id = $_POST['id'];
	$location = $_POST['location'];
	$image = $_POST['image'];
	$name = $_POST['name'];
	$desc = $_POST['description'];
    $hobbies = $_POST['hobbies'];

	$connect->query("UPDATE `large_animals`SET `location`='$location', `image`='$image', `name`='$name', `description`='$desc',`hobbies`='$hobbies' WHERE `large_animals`.`id`=$id") or die($conn->error());
	unset($_SESSION['message']);
	$_SESSION['message'] = "Record has been changed";
	$_SESSION['msg_type'] = "info";

	header("location: ../animals/large_animals.php");
}
?>