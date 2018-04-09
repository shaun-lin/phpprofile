<?php

define ('DB_USER', 'root');
define ('DB_PASSWORD', '1234qwera');
define ('DB_HOST', 'localhost');
define ('DB_NAME', 'phpprofile');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL ' .
        mysqli_connect_error());
// $servername = "localhost"; 
// $username = "root"; 
// $password = "1234qwera"; 
// $database = "phpprofile";

// $con = new mysqli($servername, $username, $password, $database);

// /* check connection */
// if (!$con) {
// 　die(' 連線失敗，輸出錯誤訊息 : ' . mysql_error());
// }
// else{
//     echo ' 連線成功 ';
// }
    


?>