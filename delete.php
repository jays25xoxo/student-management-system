<?php

$conn=mysqli_connect("localhost","root","","student_db");

$id=$_GET['id'];

$sql="DELETE FROM students WHERE studentID='$id'";

if(mysqli_query($conn,$sql))
{
echo "Student Deleted Successfully";
}
else
{
echo "Error deleting record";
}

?>