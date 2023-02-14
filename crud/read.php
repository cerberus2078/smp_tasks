<?php
$title = "Reading Data from the database";
include '../layout/header.php';
include 'db.php';
$sql = "select * from studentinfo";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "
    <table>
        <tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Group ID</th><th>City</th></tr>";

        while($row = $result->fetch_assoc()){
        echo "    
        <tr>
        <td><a href='updatesingle.php?id=$row[id]'>$row[id]</a></td>
        <td>$row[fname]</td>
        <td>$row[lname]</td>
        <td>$row[groupid]</td>
        <td>$row[city]</td>
        </tr>";
        }
    echo "</table>";
    }
    else
    {
        echo "No results";
    }
    $conn -> close();


include '../layout/footer.php';
?>