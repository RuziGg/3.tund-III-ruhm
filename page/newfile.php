<?php

	// LOGIN.PHP
	
	// errori muutujad peavad igal juhul olemas olema
	$email_error = "";
	$password_error = "";
	
	//echo $_POST["email"];
	
	//kontrollime et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "keegi vajutas nuppu";
		
		//kontrollin, et e-post ei ole tuhi
		
		$email_error = "";
		
		if (empty($_POST["email"]) ) {
			$email_error = "See vali on kohustuslik";
		}
		// kontrollime, et parool ei ole tuhi
		if (empty($_POST["password"]) ) {
			$passweord_error = "See vali on kohustuslik";
		} else {
			
		//kui oleme siia joudnud, siis parool ei ole tuhi
		
			if(strlen($_POST["password"]) < 8) {
				
				$password_error = "Peab olema vahemalt 8 tahemarki pikk!";
				
			}
			
		}
		
	}

?>
<?php require_once("../header.php"); ?>

	<h2>Log in</h2>
	
		<form action="newfile.php" method="post" >
			<input name="email" type="email" placeholder="Email"> <?php echo $email_error; ?><br><br>
			<input name="password" type="password" placeholder="Password"> <?php echo $email_error; ?><br><br>
			<input type="submit" value="Log in">
		</form>
		
	<h2>Create user</h2>
		<form action="newfile.php" method="post" >
			<input name="name" type="name" placeholder="First name"> <?php echo $email_error; ?><br><br>
			<input name="name" type="name" placeholder="Last name"> <?php echo $email_error; ?><br><br>
			<?php
			// Число
			echo "<select name='sel_date'>";
			$i = 1;
			while ($i <= 31) {
				echo "<option value='" . $i . "'>$i</option>";
				$i++;
			}
			echo "</select>";
			// Месяц
			echo "<select name='sel_month'>";
			$month = array(
				"Jan",
				"Feb",
				"Mar",
				"Apr",
				"May",
				"Jun",
				"Jul",
				"Aug",
				"Sep",
				"Oct",
				"Nov",
				"Dec"
			);
			foreach ($month as $m) {
				echo "<option value='" . $m . "'>$m</option>";
			}
			echo "</select>";
			// Год
			echo "<select name='sel_year'>";
			$j = 1920;
			while ($j <= 2015) {
				echo "<option value='" . $j . "'>$j</option>";
				$j++;
			}
			echo "</select>";
			?><br><br>
			<input name="email" type="email" placeholder="Email"> <?php echo $email_error; ?><br><br>
			<input name="email" type="email" placeholder="Re-enter email"> <?php echo $email_error; ?><br><br>
			<input name="password" type="password" placeholder="Password"> <?php echo $email_error; ?><br><br>
			<input name="password" type="password" placeholder="Password"> <?php echo $email_error; ?><br><br>
			<input type="submit" value="Create">
		</form>
		
		<form>
		Minu idee on selline, et teha päeviku, kus saab salvestada oma mõtted, ideed ja tuleviku plaanid, et pärast neid ei
		unusta või lihtsalt kirjutada oma elust, et pärast lugeda parimatest momentidest ja näidata oma lugud näiteks oma tuleviku lapsele.
		Seda päeviku võib ka kasutada nagu blogi ja jagada postitused sõpradele... Postitusel võib olla tekst, pildid, videod
		või muusika...
		</form>
		
<?php require_once("../footer.php"); ?>