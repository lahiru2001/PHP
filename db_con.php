
//insert data into database


<?php
    include("connection.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataInsert</title>
</head>
<body>


    <form method="post">
        <label>Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your name"><br><br>
        <label>Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your Email"><br><br>
        <label>Address</label>
        <input type="address" name="address" id="address" placeholder="Enter your Address"><br><br>
        <input type="submit" name="submit" value="submit">

    </form>



    <hr>
    <h3>User's Details</h3>
    <table style="width:80%;" border="2";>

    <tr>
        <th>No</th>
        <th>Nmae</th>
        <th>Email</th>
        <th>Address</th>
        <th>Operations</th>
    </tr>
 
    <?php
        $qry = "select * from register";
        $run = $db->query($qry);

        if($run->num_rows > 0)
        {
            while($row = $run ->fetch_assoc())
            {   

                $id = $row['ID'];
                
        ?>

                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Address'];?></td> 

                    <td><a href="edit.php? id=<?php echo $id; ?>"> Edit</a>
                    <a href="delete.php? id=<?php echo $id; ?>
                    " onclick="Return confirm('Are you sure?')">Delete</a></td>
                </tr>


               

    <?php
            }
        }

    ?>

  
</table>
    
</body>
</html>

<?php

  if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $addres=$_POST['address'];

    $qry ="insert into register values(null,'$name','$email','$addres')";

    if(mysqli_query($db, $qry))
    {
        header('location: db_con.php');
    }else
    {
        echo mysqli_error($db);
    }

  }

?>
