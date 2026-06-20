<?php

$conn=mysqli_connect("localhost","root","","student_db");

$result=mysqli_query($conn,"SELECT * FROM students");

echo "<h2>Student Records</h2>";

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Action</th>
</tr>";

while($row=mysqli_fetch_array($result))
{
echo "<tr>";

echo "<td>".$row['studentID']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['phone']."</td>";

echo "<td>
<a href='delete.php?id=".$row['studentID']."'>
Delete
</a>
</td>";

echo "</tr>";
}

echo "</table>";

?>