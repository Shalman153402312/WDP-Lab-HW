<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        include("config.php");    
    
        $sql = "create table if not exists  patient (id INT(6)NOT NULL AUTO_INCREMENT primary key, name VARCHAR(25) NOT NULL, email VARCHAR(30) NOT NULL)";
        $res = mysqli_query($myconn, $sql);

        if($res == true){
            echo "TABLE created";
        }
        else {
            echo "table creation failed";
        }
    ?>
</body>
</html>