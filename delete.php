//Delete Record

<?phP
    include("connection.php");

    $id = $_GET['id'];
    $qry = "delete from register where ID=$id";

    if(mysqli_query($db,$qry)){
        header('location:db_con.php');
    }
    else{
        echo mysqli_error($db);
    }

?>
