<?php
require 'connection.php';
$queryStr = "SELECT * FROM contact ORDER BY id DESC;";
$sqlQuery = mysqli_query($conn, $queryStr) or die("invalid query");
echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
<tr>
<th>No</th>
<th>Name</th>
<th>Email</th>
<th>Address</th>
<th>City</th>
<th>Message</th>";
while ($result = mysqli_fetch_row($sqlQuery)) {
    echo "<tr>
        <td>$result[0]</td>
        <td>$result[1]</td>
        <td>$result[3]</td>
        <td>$result[4]</td>
        <td>$result[5]</td>
        <td>$result[6]</td>
    </tr>";
}
echo "</table>";
?>
<a href="contact.html">Back</a>