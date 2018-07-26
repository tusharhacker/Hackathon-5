<html>
<head>
</head>

<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<input type="text" name="searchtitle"></input>
<input type="text" name="Category"></input>
<input type="Submit" value="ADD"></input>

</form>

<?php $SearchTitle=$_POST['searchtitle'];
$SearchCategory= $_POST['Category'];?>

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

$sql = "INSERT INTO searchtable (Searchtitle, SearchCategory)
VALUES ('$SearchTitle', '$SearchCategory')";

if ($conn->query($sql) === TRUE) {
    echo "Added";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


</body>