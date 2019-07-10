
<?php
include_once 'dbconnect.php';
$db=new dbconnect();
$conn=$db->connect();
$query="select *from signup";
$result=mysqli_query($conn,$query);


?>



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border="1">
            <tr>
            <th> Full name</th>
            <th> Age </th>
            <th>Phone</th>
            <th>Email</th>
        </tr>
       
        <?php while($row=mysqli_fetch_array($result)):;?>
        <tr>
        <td><?php echo $row[0];?></td>
          <td><?php echo $row[1];?></td>
            <td><?php echo $row[2];?></td>
              <td><?php echo $row[3];?></td>
        
            
        </tr>
        <?php endwhile;?>
            
        </table>
        <script>
            var row1= docume
    </body>
</html>
