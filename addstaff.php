<?php
include "home.php";
?>
<html>
    <head>
    </head>
    <body>
        <?php

            if(isset($_POST['add'])){
                $sname = $_POST['name'];
                $email = $_POST['email'];
                include "config.php";
                $sqltoadd = "INSERT INTO `staff` (`name`,`email`) VALUES ('$sname','$email')";
                $sqladdcid ="UPDATE `staff` SET `sid` = CONCAT('S', LPAD(id, 3, '0'));";

                if($conn->query($sqltoadd)){
                    $conn->query($sqladdcid);
                    header("Location: index.php");
                }

            }
        ?>
        <main>
        <section>
            <form action="" method="post">
                <h4> Add Staff </h4>
                <label>Name</label>
                <input type="text" name="name"><br>
                <label>Email</label>
                <input type="email" name='email'><br>
                <input type="submit" name="add" value="Add Staff">
                <br>
            </form>
        </section>
        </main>
        
    </body>
</html>

