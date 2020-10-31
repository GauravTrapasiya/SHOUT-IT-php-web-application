<?php
$con = mysqli_connect("localhost","[database root directory]","[password]","shoutit");
if(mysqli_connect_errno()){
    echo 'failed to connect to MySQLi: '.$mysqli_connect_error(); 
}
?>
