//edit record
<?php

    include("connection.php");

    if (!$db) {
        die('Error in database'. mysqli_error($db));
    }else{
        $id = $_GET['id'];
        $qry = "select * from register where ID = $id";
        $run = $db -> query($qry);

        if($run->num_rows > 0)
        {
            while($row = $run->fetch_assoc())
            {
                $username = $row['Name'];
                $useremail = $row['Email'];
                $useraddress = $row['Address'];
            }
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
     <title>Edit Details</title>
</head>
<body>
    <form method="post">

    <label>Name</label>
    <input type="text" name="name" id="name" value ="<?php echo $username; ?>"><br><br>
    <label>Email</label>
    <input type="email" name="email" id="email" value ="<?php echo $useremail; ?>"><br><br>
    <label>Address</label>
    <input type="address" name="address" id="address" value ="<?php echo $useraddress; ?>"><br><br>
    <input type="submit" value="update" name="update">
    </form>    
</body>
</html>

<?php

    if (isset($_POST['update'])) {
        
        $name =  $_POST['name'];
        $email = $_POST['email'];
        $address =  $_POST['address'];
        
        $qry = "update register set Name ='$name', Email='$email', Address='$address' 
        where ID=$id ";

        if (mysqli_query($db,$qry)) {
            header('location:db_con.php');
        }else{
            echo mysqli_error($db);
        }
        
    }

?>
