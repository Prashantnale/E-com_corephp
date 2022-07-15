<?php
    $servername="localhost";
    $username="root";
    $password="";
    $data="e-com";
    $conn=mysqli_connect($servername,$username,$password,$data);
    if($conn)
    {
        echo "";
    }
    else
    {
        echo "Erorr";
    }
    ?>