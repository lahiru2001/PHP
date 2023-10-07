<?php

    include("action.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if(isset($_GET["update"]))
{
?>
<h2>UPDATE</h2>
    <form action="" method="post">
        <label>Name :</label>
        <input type="text" name="name" id="name" placeholder="Enter your name"><br><br>
        
        <label>Eamil :</label>
        <input type="email" name="email" id="email" placeholder="Enter your Email"><br><br>
        
        <label>Password :</label>
        <input type="password" name="password" id="pass" placeholder="Enter your password"><br><br>
        
        <label>Confirm password :</label>
        <input type="password" name="conpassword" id="cpass" placeholder="Confirm password"><br><br>    

        <input type="submit" name="submit" value="submit">

    </form>
    <?php
    }else
    {
    ?>

    <h2>Register Here</h2>
    <form action="" method="post">
        <label>Name :</label>
        <input type="text" name="name" id="name" placeholder="Enter your name"><br><br>
        
        <label>Eamil :</label>
        <input type="email" name="email" id="email" placeholder="Enter your Email"><br><br>
        
        <label>Password :</label>
        <input type="password" name="password" id="pass" placeholder="Enter your password"><br><br>
        
        <label>Confirm password :</label>
        <input type="password" name="conpassword" id="cpass" placeholder="Confirm password"><br><br>    

        <input type="submit" name="submit" value="submit">

    </form>

    <?php
    }

    ?>

    <table border="1" width="50%">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th colspan="2">Actions</th>
        </tr>

        <?php
           foreach ($sql as $value) {
    
         ?>
        <tr>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><a href="index1.php?update=1&id=<?php echo $value['id']; ?>">Update</a></td>
            <td><a href>Delete</a></td>
        </tr>

        <?php
            }
        ?>


    </table>


    
</body>
</html>