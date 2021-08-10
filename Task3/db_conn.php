<?php

 session_start();
  //connect to the db
$DBHOST = "localhost";
$DBUSER = "root";
$DBPWD = "";
$DBNAME = "magebit";

 $conn = new mysqli($DBHOST,$DBUSER,$DBPWD,$DBNAME);


if($conn->connect_error){

die("Connection failed:".$conn->connect_error);
}
//get all data
$fetch = 'SELECT * FROM emails' ;
$result = $conn->query($fetch);


?>
