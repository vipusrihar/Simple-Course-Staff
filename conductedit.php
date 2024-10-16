<?php
include "home.php";

include "config.php";
if(isset($_POST['update'])){
    $cid =$_GET['cid'];
    $sqltodelete = "DELETE FROM `conduct` WHERE `cid`='$cid'";
    $conn->query($sqltodelete);
    if(isset($_POST['options'])){
        $selectedOptions = $_POST['options'];
        foreach ($selectedOptions as $option) {
            $sql = "INSERT INTO `conduct` (`cid`,`sid`) VALUES ('$cid','$option')";
            if($conn->query($sql)){
                header("Location: index.php");
            }
        }
    }
}
?>
<html>
    <body>
        <main>
            <?php
            
            ?>
            <section>
                <h4>Add / Remove Staff to Course</h4>
                <form method="post" action="">  
                    <?php
                    if(isset($_GET['cid'])){

                        
                        $sqltoconductstaff = "SELECT `staff`.`sid` FROM `conduct` INNER JOIN `staff` ON `conduct`.`sid` = `staff`.`sid` WHERE `conduct`.`cid` = '".$_GET['cid']."'";
                        $courseresult = $conn->query($sqltoconductstaff);
                        $teachers = array();
                        if($courseresult->num_rows >0){
                            while($row = $courseresult->fetch_assoc()){
                                array_push($teachers,$row['sid']);
                            }
                        }


                        $sqltostaff = "SELECT `sid`,`name` FROM `staff` ";
                        $staffresult = $conn->query($sqltostaff);
                            if($staffresult->num_rows >0){
                                while($rowstaff = $staffresult->fetch_assoc()){
                                    $icChecked = in_array($rowstaff['sid'],$teachers) ? 'checked' : '';
                                    ?>
                                    <input name="options[]" type="checkbox" value="<?php echo $rowstaff['sid']; ?>" <?php echo $icChecked ?> ><?php echo $rowstaff['name'];?> <br>
                                    <?php
                                }  
                            }
                        ?>
                        <br>
                        <input type="submit" value="Add" name="update">

                        
                <?php
                }
                ?> 
                </form>
                
            </section>
        </main>
    </body>
</html>