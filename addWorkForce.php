<html>
<head>
</head>

<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<input type="file" name="pic"></input>
<input type="text" name="name"></input>
<input type="text" name="category"></input>
<input type="text" name="phone"></input>
<input type="text" name="email"></input>
<input type="text" name="add"></input>
<input type="text" name="lati"></input>
<input type="text" name="longi"></input>
<input type="text" name="from_t"></input>
<input type="text" name="to_t"></input>
<input type="text" name="mon"></input>
<input type="text" name="tue"></input>
<input type="text" name="wed"></input>
<input type="text" name="thu"></input>
<input type="text" name="fri"></input>
<input type="text" name="sat"></input>
<input type="text" name="sun"></input>
<input type="text" name="wallet"></input>
<input type="text" name="instant service"></input>
<input type="Submit" name="submit" value="ADD"></input>

</form>

<?php $name=$_POST['name'];
$category= $_POST['category'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$address= $_POST['add'];
$latitude= $_POST['lati'];
$longitude= $_POST['longi'];
$from_t= $_POST['from_t'];
$to_t= $_POST['to_t'];
$mon= $_POST['mon'];
$tue= $_POST['tue'];
$wed= $_POST['wed'];
$thu= $_POST['thu'];
$fri= $_POST['fri'];
$sat= $_POST['sat'];
$sun= $_POST['sun'];
$wallet= $_POST['wallet'];
$instant_service= $_POST['instant service'];
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tushar_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO searchtable (pic, name, phone, add, SearchCategory)
VALUES ('$SearchTitle', '$SearchCategory')";

if ($conn->query($sql) === TRUE) {
    echo "Added";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php

if(isset($_POST['submit']){

	$names = $_FILES['pic']['name'];
	$temp = $_FILES['pic']['tmp_name'];

	$success = move_uploaded_file($temp,"img/$names");
}
?>

</body>