<!DOCTYPE html>
<head>
<?php 
include_once('dbcon.php');

$day =$_POST['dobDay'];
$month =$_POST['dobMonth'];
$year = $_POST['dobYear'];
$dob = $day.$month.$year;
$hc="";
if(isset($_POST['health_condtions'])) {
	foreach ($_POST['health_condtions'] as $hc){
		$hc.=json_encode($hc);

	}
}

	// $hc = json_encode($_POST['health_condtions']);

 $stmt = $db_conn->query("INSERT INTO events (firstname,surname,gender,email,phone,yoga,pra_yoga,other_health,medical_details,surgery_details,dob,health_condtions)
 VALUES ('$_POST[firstname]','$_POST[surname]','$_POST[gender]','$_POST[email]','$_POST[phone]',
	'$_POST[yoga]','$_POST[pra_yoga]','$_POST[other_health]',
 	'$_POST[medical_details]','$_POST[surgery_details]','$dob','$hc')");	
 
?>


</head>

<body>
	<div>
		<img src="./img/examples/logo_small.jpg" alt="yogathon 2013 logo"/>
	</div>
	<h3> Team Yogathon will contact you soon!</h3>
	<script type="text/javascript">
var delay = 5000; //Your delay in milliseconds
setTimeout(function(){ window.location = 'http://localhost/project/index.htm'; }, delay);

</script>
</body>
</html>