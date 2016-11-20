<?php
include('login.php'); // Includes Login Script

//if(isset($_SESSION['login_user'])){
//header("location: dodaj_studenta.html");
//}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Stipendisti - Prijava</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="http://sync.singidunum.ac.rs/stipendisti/public/img/favicon.png" sizes="16x16" type="image/png">
</head>
<body>
	<div class="wrapper">
		<!-- <a class="lozinka unselectable" href="#"><p class="reset">Reset lozinke</p></a> -->
		<img class="logo" src="http://sync.singidunum.ac.rs/stipendisti/public/img/logo.png">

			<div class="header1">
					<h3>PORTAL ZA STIPENDISTE</h3>
			</div>
			
				<div class="slika">

				<div class="login-page">
					  <div class="form">
					   
                                              <form class="login-form" action="" method="post">
					      <input type="text" name="username" placeholder="Korisničko ime"/>
					      <input type="password" name="password" placeholder="Lozinka"/>
					      <button name="submit">PRIJAVI SE</button>
					      <a class = "reset">Reset lozinke</a>
                                              <br>
					      <span><?php echo $error; ?></span>
					   </form>
				</div>
			</div>
				
		</div>

			
		
		<div class="banner-information-strip-background"></div>

		<div class="cut-out-region unselectable" style="height: 47px;">
					<span class="copyright unselectable">Univerzitet Singidunum ©  2016</span>
		</div>
		
	</div>

</body>
</html>
