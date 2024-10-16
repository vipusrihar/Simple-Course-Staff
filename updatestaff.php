<?php
include "home.php";
include "config.php";

if(isset($_POST['update'])){
    $sid = $_POST['sid'];
    $namenew = $_POST['name'];
    $emailnew = $_POST['email'];

    $sqltoupdate = "UPDATE `staff` SET `name` = '$namenew', `email` = '$emailnew' WHERE `sid` = '$sid'";
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
                if(isset($_GET['sid'])){
                    $sid = $_GET['sid'];
                    $sql = "SELECT * FROM `staff` WHERE `sid`="."'$sid'";
                    $result = $conn->query($sql);
                    if($result == TRUE){
                        while($row = $result->fetch_assoc()){
                            $name=$row['name'];
                            $email=$row['email'];
                        }
                        ?>
                        <h4>Edit Course Information - <?php $sid?></h4>
                        <form method="post" action="">
                            <label>Course ID</label>
                            <input type="text" name="sid" value="<?php echo $sid;?>" readonly><br>
                            <label>Tilte</label>
                            <input type="text" name="name" value="<?php echo $name;?>"><br>
                            <label>Hours</label>
                            <input type="email" name="email" value="<?php echo $email;?>"><br>
                            <br>
                            <input type="submit" name="update" value="Update-Staff">
                        </form>
                        <?php
                    }             
                }
                ?>
                
            </section>
        </main>
    </body>
</html>