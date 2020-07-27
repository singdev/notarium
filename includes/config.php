<?php
// Informations d'identification
define('HOST', 'localhost');
define('DB_NAME', 'registration');
define('USER', 'root');
define('PASS', '');

try{
	$db = new PDO("mysql:host=" . HOST . ";dbname" . DB_NAME, USER, PASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	

} catch(PDOException $e){
	echo $e;
}
 
?>
