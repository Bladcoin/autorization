<?php 

// mysql_connect()

$connect = mysqli_connect('localhost', 'root','', 'project_db');

if(!$connect) {
      die('Error to database!');
}

?>