<?php 
    include('dbcon.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $delete_id = $_POST['delete_id'];

        //delete data from the database
        $query = "DELETE FROM students WHERE id = '$delete_id'";

        $res = mysqli_query($connection, $query);

        if($res){
            header('Location: index.php');

            exit();
        }else{
            echo "Error " . mysqli_error($connection);
        }
    }

    mysqli_close($connection);
