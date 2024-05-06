<?php
    include ('dbcon.php');
    
    // check if the form is submitted

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // retive from data
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $age = $_POST['age'];

        $query = "INSERT INTO students (first_name, last_name, age) VALUES ('$first_name', '$last_name', '$age')";

        $res = mysqli_query($connection, $query);

        if ($res){
            //if insertion is successful , redirect to home page
            header("Location: index.php");
            exit();
        }

        else{
            echo "Error" . mysqli_error($connection);
        }

    }
    
    // close connection
    mysqli_close($connection);

?>