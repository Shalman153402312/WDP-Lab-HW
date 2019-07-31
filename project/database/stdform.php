<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Form</title>
</head>
<body>
   <h2>Stduent Information form</h2><hr>
   <form action="stdinfo.php" name="stdform" id="stdform" method="post">
       <p>Id:</p>
       <input type="number" id="id" name="id"><br>
       
       <p>Name:</p>
       <input type="text" name="name" id="name"><br>
       
       <p>Email:</p>
       <input type="text" id="email" name="email">
       
       <input type="submit" value="Add">
   </form>
    
</body>
</html>