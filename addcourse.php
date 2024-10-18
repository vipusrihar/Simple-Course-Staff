<?php
include "home.php";
?>
<html>
    <head>
    </head>
    <body>
        <?php

            if(isset($_POST['add'])){
                $cname = $_POST['title'];
                $hours = $_POST['hours'];
                include "config.php";
                $sqltoadd = "INSERT INTO `course` (`title`,`hours`) VALUES ('$cname','$hours')";
                $sqladdcid ="UPDATE course  SET cid = CONCAT('C', LPAD(id, 3, '0'));";

                if($conn->query($sqltoadd)){
                    $conn->query($sqladdcid);
                    header("Location: index.php");
                }

            }
        ?>
        <main>
        <section>
            <form action="" method="post">
                <h4> Add Course </h4>
                <label>Course Title</label>
                <input type="text" name="title"><br>
                <label>Duration</label>
                <input type="number" name='hours'><br>
                <input type="submit" name="add" value="add">
                <br>
            </form>
        </section>
        </main>
        
    </body>
</html>

