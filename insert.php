<?php
include_once('dbcon.php');
// $name = $_POST['fname'];
// $gender = $_POST['gender'];
// $comments =$_POST['comments'];
// $day =$_POST['birthdate'];
// $month =$_POST['birthmonth'];
// $year = $_POST['birthyear'];
// $dob = $day.$month.$year;
// $language= $_POST['lang'];
// $something= is_array($_POST['favourite']);
// 		foreach ($something as $a) {
// 				echo $a .'<br/>';
// 			}		
// echo $something;




    


//inserting to the db

$stmt = $db_conn->query("INSERT INTO events (firstname, surname,gender)
VALUES ('$_POST[firstname]','$_POST[surname]', '$_POST[gender]')");	
echo 'Inserted';

?>