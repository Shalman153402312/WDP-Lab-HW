<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stduent Info</title>
</head>
<body>
   <h2>Student Info</h2><hr>
    <?php 
    include('config.php');
    $sql= "SELECT * FROM patient";
    $res = mysqli_query($myconn, $sql);
    echo '<table><tr><th>Id</th><th>Name</th><th>Email</th></tr>';
//    if(mysqli_num_rows($rees)>0){
//        while($row=mysqli_fetch_assoc($rees)){
//            echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td></tr>";
//        }
//    }
    while($row=mysqli_fetch_array($res)){
            echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td></tr>";
        }
    echo "</table>";
    
    
    ?>
</body>
</html>