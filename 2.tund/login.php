<?php

	//var_dump($_GET);
	
	//echo "<br/>";
	
	
	// EMAIL CONTROLL
	$signupEmailError = "*";
	$signupEmail = "";
	
	//var_dump($_POST);
	
	
	//kas keegi vajutas nuppu ja kas on olemas

	if (isset($_POST["signupEmail"])) {
		//on olemas
		// kas epost on tühi
		if (empty ($_POST["signupEmail"])) {
			
			//on tühi
			$signupEmailError = "Väli on kohustuslik!";
		} else {
			//email on olemas ja õige
			$signupEmail = $_POST["signupEmail"];
		}
	}
	
	// kas epost on tühi
	
	// PASSWORD CONTROLL
	$signupPasswordError = "";
	//var_dump($_POST);
	
	//kas keegi vajutas nuppu ja kas on olemas
	if (isset($_POST["signupPassword"])) {
		//on olemas
		// kas epost on tühi
		if (empty ($_POST["signupPassword"])) {
			//on tühi
			$signupPasswordError = "Väli on kohustuslik!";
		} else {
			//parool ei olnud tühi
			//kas parool on piisavalt pikk
			if( strlen($_POST["signupPassword"]) < 8) {
				$signupPasswordError = "* Parrol peab olema vähemalt 8 tähemärki pikk";
			}
		}
	}

	// SURENAME CONTROLL
	$signupSurnameError = "";
		if (isset($_POST["signupSurname"])) {
		//on olemas
		// kas eesnimi on tühi
		if (empty ($_POST["signupSurname"])) {
			//on tühi
			$signupSurnameError = "Väli on kohustuslik!";
		}
	}

	// FORENAME CONTROLL
	$signupForenameError = "";
		if (isset($_POST["signupForename"])) {
		//on olemas
		// kas perekonna nimi on tühi
		if (empty ($_POST["signupForename"])) {
			//on tühi
			$signupForenameError = "Väli on kohustuslik!";
		}
	}
	$gender = "male";
	if (isset ($_POST["gender"])) {
		if (empty ($_POST["gender"])) {
			$genderError = "* Väli on kohustuslik!";
		} else {
			$gender = $_POST["gender"];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Logi Sisse</h1>

	<form method="POST">
		<input name="loginEmail" placeholder="E-post" type="email">
			<br/><br/>
		<input name="loginPassword" placeholder="Parool" type="password">
			<br/><br/>
		<input type="submit" value="Logi sisse">
			<br/><br/>
			<br/><br/>
	</form>
	
<h1>Loo kasutaja</h1>

	<form method="POST">
		<label>E-post</label><br>
		<input name="signupEmail" placeholder="E-post" type="email" value="<?=$signupEmail;?>"> <?php echo $signupEmailError; ?>
			<br/><br/>
		<input name="signupPassword" placeholder="Parool" type="password"> <?php echo $signupPasswordError; ?>
			<br/><br/>
		<input name="signupSurname" placeholder="First name " type="text"> <?php echo $signupSurnameError; ?>
			<br/><br/>
		<input name="signupForename" placeholder="Last name" type="text"> <?php echo $signupForenameError; ?>
			<br/><br/>
			
			<?php if ($gender == "female") { ?>
			  <input type="radio" name="gender" value="female" checked> Female<br>
			<?php } else { ?>
 			  <input type="radio" name="gender" value="female"> Female<br>
			<?php } ?>
			
			<?php if ($gender == "male") { ?>
			  <input type="radio" name="gender" value="male" checked> Male<br>
			<?php } else { ?>
 			  <input type="radio" name="gender" value="male"> Male<br>
			<?php } ?>
			
			<?php if ($gender == "other") { ?>
			  <input type="radio" name="gender" value="other" checked> Other<br>
			<?php } else { ?>
 			  <input type="radio" name="gender" value="other"> Other<br>
			<?php } ?>
			
			<br/><br/>
		<input type="submit" value="Loo Kasutaja">
	</form>
</body>
</html>