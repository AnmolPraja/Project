<?php
    header('Location: login_page.html');

    //Connecting to a SQL Server
    $con = mysqli_connect('localhost','root',''); 
    
    mysqli_select_db($con, 'hi_trading');

    $query = mysqli_query('create table product_detail ( int AUTO_INCREMENT PRIMARY KEY, productName varchar(255), price int(), description TEXT');
    $result = mysqli_query($con, $query);

    if (!$result) {
        die('Table creation failed: ' . mysqli_error($con));
    }

    function getproductDetails(){
        $result = mysqli_query($con, 'SELECT * FROM product_detail');
    }
    

    // Check if there are rows in the result set

    // Close the connection
    mysqli_close($con);
    ?>
?>