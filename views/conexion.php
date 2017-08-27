<?php
    try {        
        require_once "../helper/database.php";
    $con = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
    //$con = new PDO('mysql:unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock;dbname='.$database, $username, $password);
}
catch (PDOException $e) {
	print "¡Error!: " . $e->getMessage();
	die();
} 

?>