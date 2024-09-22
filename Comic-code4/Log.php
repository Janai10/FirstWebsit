<?php
    if(isset($_post['submit']))
    {
        $uname = $_post['uname'];
        $psw = $_post['psw'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "comic-code";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO contactform_entries (id, uname, psw) VALUES ('0', '$uname', '$psw')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);
?>