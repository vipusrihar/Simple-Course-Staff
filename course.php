<h3>Course Details</h3>
<table border=1>
    <tr>
        <th>Course Code</th>
        <th>Course Title</th>
        <th>duration</th>
        <th></th>
    </tr>

<?php
include "config.php";

$sqltocourse = "SELECT * FROM `course` ";

$result = $conn->query($sqltocourse);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['cid'] ?></td>
            <td><?php echo $row['title'] ?></td>
            <td><?php echo $row['hours'] ?></td>
            <td><button><a href="updatecourse.php?cid=<?php echo $row['cid'] ?>">Edit</a></button></td>
        </tr>
        <?php
    }
}
$conn->close();

?>
</table>