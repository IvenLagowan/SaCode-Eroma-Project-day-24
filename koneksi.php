<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "data_mhs";

    $conn = mysqli_commit($shot, $user, $pass, $db);
    function query($query){
        global$conn;
        $resulr = mysqli_query($conn, $query);
    }
?>