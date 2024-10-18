<h3>Staff Details</h3>
<table border=1>
    <tr>
        <th>Staff ID</th>
        <th>Name</th>
        <th>Email</th>
        <th></th>
    </tr>

<?php
include "config.php";

$sqltostaff = "SELECT * FROM `staff` ";

$result = $conn->query($sqltostaff);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['sid'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><button><a href="updatestaff.php?sid=<?php echo $row['sid'] ?>">Edit</a></button></td>
        </tr>
        <?php
    }
}
?>
</table>
    <button onclick="window.location='addstaff.php'"> Add </button>
<?php
$conn->close();

?>
</table>