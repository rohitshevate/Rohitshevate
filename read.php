<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="ptcss.css">
</head>
<body>
</body>
</html>
<?php
include 'connection.php';

$sql = "SELECT * FROM registrations";
$query=mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($query)) {
        echo "<tr>";
        echo "<td>". $row['STB_No'] . "</td>";
        echo "<td>". $row['Name'] . "</td>";
        echo "<td>". $row['Mobile_no'] . "</td>";
        echo "<td>". $row['Email'] . "</td>";
        echo "<td>". $row['Address'] . "</td>";
        echo "<td>". $row['Pincode'] . "</td>";
        echo "<td>". $row['Adhar_no'] . "</td>";
        ?>
        <td><button id="delete" ><a href="delete.php?STB_No=<?php echo $row['STB_No']; ?>"> DELETE </a></button> </td>
        <td><button id="update" ><a href="update.php?STB_No=<?php echo $row['STB_No']; ?>"> UPDATE </a></button> </td>
        <?php
}
?>
