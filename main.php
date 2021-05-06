<?php
$pdo = new PDO('sqlite:uploads.sqlite');

$name = $_POST['name'];
$main = $_POST['main'];
$id = $_POST['id'];

$sql = null;
if($main) {
	$sql = "INSERT INTO heso(name)
		VALUES('$name')";
}

$result = $pdo -> exec($sql);
if($result) {
	echo '<script>alert("Success!")</script>';
	header('location:index.php');
} else {
	echo '<script>alert("failed!")</script>';
	header('location:index.php');
}
sqlite_close();?>
