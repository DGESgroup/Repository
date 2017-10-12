<?php

if (isset($_POST['submit'])) {

	include_once 'db-inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['firstName']);
	$last = mysqli_real_escape_string($conn, $_POST['lastName']);
    $phone = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
	$email = mysqli_real_escape_string($conn, $_POST['emailAddress']);
    $address = mysqli_real_escape_string($conn, $_POST['streetAddress']);
    $city = mysqli_real_escape_string($conn, $_POST['cityName']);
    $state = mysqli_real_escape_string($conn, $_POST['stateName']);
		$country = mysqli_real_escape_string($conn, $_POST['countryName']);
		$usertype = mysqli_real_escape_string($conn, $_POST['userType']);
		$grade = mysqli_real_escape_string($conn, $_POST['grade']);
		$pwd = mysqli_real_escape_string($conn, $_POST['password']);


    // Error handlers to check if anything is empty
    // check if all field is field out
    if (empty($first) || empty($last) || empty($email) || empty($usertype) || empty($pwd)){
        header("Location: ../signup.php?signup=empty");
	   	  exit();
    } else {
        // Check if input character is valid
				if (!preg_match("/^[a-zA-Z]*$/", $first)) {
					header("Location: ../signup.php?signup=invalidFIRST");
					exit();
				} elseif (!preg_match("/^[a-zA-Z]*$/", $last)) {
					header("Location: ../signup.php?signup=invalidLAST");
					exit();
				} elseif (!preg_match("/^[0-9]*$/", $phone)) {
					header("Location: ../signup.php?signup=invalidPHONE");
					exit();
				} else {
					// check if email is valid
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						header("Location: ../signup.php?signup=invalidemail");
			   	  exit();
					} else {
						$sql = "SELECT * FROM users WHERE user_email = '$email'";
						$result = mysqli_query($conn, $sql);
						$resultcheck = mysqli_num_rows($result);

						if ($resultcheck > 0) {
							header("Location: ../signup.php?signup=usertaken");
				   	  exit();
						} else {
							// Hashing the passowrd to make it unregonize
							$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
							//insert the user into the db
							$sqlinsert = "INSERT INTO users (user_first, user_last, phone, user_email, streetaddress, city, state,
																							Country,user_type, grade,user_password)
							VALUES ('$first', '$last', '$phone','$email', '$address', '$city', '$state','$country','$usertype', '$grade','$hashedpwd');";

							$result = mysqli_query($conn, $sqlinsert);
							header("Location: ../signup.php?signup=success");
				   	  exit();

						}
					}
				}
    }

} else {
	header("Location: ../signup.php");
	exit();
}
