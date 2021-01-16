<?php
$username = "root"; 
            $password = "";      
            $server   = "localhost";   
            $dbname   = "shopee";      
            
            $connect = mysqli_connect($server, $username, $password, $dbname);

            
            if (!$connect) {
                die("Không kết nối :" . mysqli_connect_error());
            }
?>