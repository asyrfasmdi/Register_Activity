<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
</head>
<body>

<?php
	$name = $_POST["name"];
	$nric = $_POST["nric"];
	$email = $_POST["email"];
	$states = $_POST["states"];

	function getDob($nric){
		$tahun = substr($nric, 0, 2);
		$bulan = substr($nric, 2, 2);
		$hari = substr($nric, 4, 2);

		$dob = $tahun. "-" .$bulan. "-" .$hari;

		return date("d-M-Y" ,strtotime($dob));

	}

	function getGender ($nric) {
		$gender = substr($nric, -1);

		if (in_array($gender, array(2,4,6,8))) {
			return "girl..";
		}
		else if(in_array($gender, array(1,3,5,7,9))){
			return "boy..";
		}
	}

	echo "<center><font size = '5'>Welcome $name </center>";

	echo "<br>Your name is ".$name;
	echo "<br>Your IC Number is ".$nric;
	echo "<br>Your e-mail is ".$email;
	echo "<br>Your state is ".$states;
	echo "<br>Your date of birth is ".getDob($nric);
	echo "<br>Your gender is ".getGender($nric);
?>

</body>
</html>
