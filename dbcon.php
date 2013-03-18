<?php

try{
$db_conn =  new PDO('mysql:host=localhost;dbname=microsoft','root','');
}
catch(PDOException $e){
	echo 'cannot connect to database';
}


?>
