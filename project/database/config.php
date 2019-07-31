<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Db Connection</title>
</head>
<body>
    <?php
    $db_host = "localhost";
    $db_username = "root";
    $db_pass = "";    
    $db_name = "demo";
    
    $myconn = mysqli_connect($db_host, $db_username, $db_pass, $db_name);
    if($myconn->connect_error){
        echo "Connection failed";
    }
    else {
        echo "<h1>connection succesfull</h1>";
    }
    
    ?>
</body>
</html>