<?php

$db_name = "mysql:host=localhost;dbname=shop_db";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);
if(!$conn){
            die("connection to this database failed due to ".mysqli_connect_error());
        }
        //echo "success connecting to the database";

?>