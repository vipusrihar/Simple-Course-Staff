<?php
include "home.php";
include "config.php";

if(isset($_POST['update'])){
    $cid = $_POST['cid'];
    $titlenew = $_POST['title'];
    $hoursnew = $_POST['hours'];

    $sqltoupdate = "UPDATE `course` SET `title` = '$titlenew', `hours` = '$hoursnew' WHERE `cid` = '$cid'";
    if($conn->query($sqltoupdate)){
        header("Location: index.php");
    }


}
?>

<html>
    <body>
        <main>
            <section>
                <?php
                
                if(isset($_GET['cid'])){
                    $cid = $_GET['cid'];
                    $sql = "SELECT * FROM `course` WHERE `cid` = '$cid'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc()){
                            $title=$row['title'];
                            $hours=$row['hours'];
                        }
                        ?>
                        <h4>Edit Course Information - <?php $cid?></h4>
                        <form method="post" action="">
                            <label>Course ID</label>
                            <input type="text" name="cid" value="<?php echo $cid;?>" readonly><br>
                            <label>Tilte</label>
                            <input type="text" name="title" value="<?php echo $title;?>"><br>
                            <label>Hours</label>
                            <input type="number" name="hours" value="<?php echo $hours;?>"><br>
                            <br>
                            <input type="submit" name="update" value="Update-Course">
                        </form>
                        <?php
                    }             
                }
                ?>
                
            </section>
        </main>
    </body>
</html>