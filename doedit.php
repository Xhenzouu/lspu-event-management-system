<?php
include("dbconnect.php");
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$title = $_REQUEST['title'];
$year = $_REQUEST['Year'];
$department = $_REQUEST['department'];
$gender = $_REQUEST['gender'];
$fromdate = $_REQUEST['fromdate'];
$todate = $_REQUEST['todate'];
$people = $_REQUEST['people'];

$query = mysqli_query($db_connect, "UPDATE symbols SET name='$name', title='$title', email='$email', year='$year', department='$department', gender='$gender', fromdate='$fromdate', todate='$todate', people='$people' WHERE id='$id'");

if (!$query) {
    echo "<script type='text/javascript'>alert('Error in Submission! Try Again '); window.location = 'edit.php';</script>";
} else {
    echo "<script type='text/javascript'>alert('Edited Successfully! '); window.location = 'edit.php';</script>";
}

mysqli_close($db_connect);
?>