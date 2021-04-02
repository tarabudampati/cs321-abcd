<?php
/* Connection details on local */
define('DB_SERVER', 'localhost');
define('DB_NAME', 'dances_db');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

/* Connection details on bluehost */
//define('DB_SERVER', 'localhost');
//define('DB_NAME', 'silccsco_cs321');
//define('DB_USERNAME', 'silccsco_cs321');
//define('DB_PASSWORD', 'silccsco_cs321');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>