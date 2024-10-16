<h3>Course-Staff Details</h3>
<?php
include "config.php";
$sqltocourse = "SELECT * FROM `course` ";

$resultcourse = $conn->query($sqltocourse);


if($resultcourse->num_rows > 0){
    while( $rowcourse = $resultcourse->fetch_assoc()){
        ?>
        <h4><?php echo$rowcourse['cid']?>-<?php echo $rowcourse['title']?>(<?php echo$rowcourse['hours']?>) &nbsp;<button><a href="conductedit.php?cid=<?php echo$rowcourse['cid']?>">Edit</a></button></h4>
        
        
        <?php
        $sqltoconductstaff = "SELECT `staff`.`sid`, `staff`.`name`, `staff`.`email` FROM `conduct` 
                      INNER JOIN `staff` ON `conduct`.`sid` = `staff`.`sid` 
                      WHERE `conduct`.`cid` = '".$rowcourse['cid']."'";

        $resultstaff = $conn->query($sqltoconductstaff);
        if($resultstaff->num_rows > 0){
            echo "<table border='1' ><tr><th>Staff ID</th><th>Name</th><th>Email</th><tr>";
            while($rowstaff = $resultstaff->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $rowstaff['sid']?></td>
                    <td><?php echo $rowstaff['name']?></td>
                    <td><?php echo $rowstaff['email']?></td>
                </tr>
                <?php
            }
            echo "</table>";
        }        
    }
}

$conn->close();

?>
