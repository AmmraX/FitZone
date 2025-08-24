<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass); //It opens a connection to MySQLi server
if(!$conn){
    die('Could not Connect: '.mysqli_error($conn));
}
echo 'Connected Successfully';

echo '<br>';
//Selecting database
$db= mysqli_select_db($conn,'users_db');

if(!$db){
    echo 'Select Database first';
}else
    echo 'Database is Selected';

//mysqli_close($conn);


?>