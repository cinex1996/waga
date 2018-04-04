<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<title>Twoja waga</title>
	</head>
	<body>
		<header>
			<div class="p1">
			Oblicz swoje BMI i sprawdź czy masz wagę normalną.
		</div>
		</header>
		<main>
			<article>
				<section>
					<div class="waga">
					<header>
						<form action="waga.php" method="POST">
							<input type="text" name="wzrost" placeholder="Podaj swój wzrost (m)"/><br><br>
							<input type="text" name="waga" placeholder="Podaj swoją wagę"><br><br>
							<input type="submit" value="Oblicz BMI">
						</form>
						<?php
						session_start();
						if(isset($_SESSION['liczba']))
							{
								echo $_SESSION['liczba'];
								unset($_SESSION['liczba']);
							}
							?>
					</header>
				</div>
				</section>
			</article>
				
			
		</main>
	</body>
</html>