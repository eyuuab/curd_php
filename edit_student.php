<?php 
    include('dbcon.php');

    //check if the form is submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $edit_id = $_POST['edit_id'];
        $edit_first_name = $_POST['edit_first_name'];
        $edit_last_name = $_POST['edit_last_name'];
        $edit_age = $_POST['edit_age'];

        //update data in the database
        $query = "UPDATE students SET first_name = '$edit_first_name', last_name = '$edit_last_name', age = '$edit_age' WHERE id = '$edit_id'";

        $res = mysqli_query($connection, $query);

        if($res) {
            header('location: index.php');
            exit();
        } else {
            //if update fails, display an error
            echo "Error: " . mysqli_error($connection);
        }
    }
    
    mysqli_close($connection);

    //retrieve data
