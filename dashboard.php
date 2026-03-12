<?php
session_start();

if(!isset($_SESSION['admin']))
{
header("Location:login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
<title>Dashboard</title>
</head>

<body>

<h2>Welcome Admin</h2>

<a href="add_student.php">Add Student</a>

<br><br>

<a href="view_students.php">View Students</a>

<br><br>

<a href="logout.php">Logout</a>

</body>

</html>