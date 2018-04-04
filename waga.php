<?php
session_start();
class waga
{
	function m1()
	{ 	
		$wzrost=$_POST['wzrost'];
		$waga=$_POST['waga'];
	   not_sql($wzrost,$waga);
		if((is_numeric($wzrost))&&(is_numeric($waga)==true))
		{
		
		$BMI=$waga/($wzrost*$wzrost);
		if($BMI<16)
		{
          echo "wygłodzenie";
		}
		else if(($BMI>16)&&($BMI<16.99))
		{
			echo "wychudzenie";
		}
		else if(($BMI>17)&&($BMI<18.49))
		{
			echo "Niedowaga";
		}
		else if(($BMI>18.5)&&($BMI<24.99))
		{
			echo "Wartość prawidłowa";
		}
		else if(($BMI>25)&&($BMI<29.99))
		{
			echo "Nadwaga";
		}
		else if(($BMI>30)&&($BMI<34.99))
		{
			echo "I Stopień otyłości";
		}
		else if(($BMI>35)&&($BMI<39.99))
		{
			echo "II Stopień otyłości";
		}
		else if($BMI>=40)
		{
			echo "III Stopień otyłości";
		}
	} 
	else
	{
		header('Location:index.php');
		$_SESSION['liczba']='Podaj liczby';
	}

}

}
function not_sql($m1,$m2)
{
	$m1=htmlentities($m1,ENT_QUOTES,"UTF-8");
	$m2=htmlentities($m2,ENT_QUOTES,"UTF-8");
}



?>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="style1.css"/>
	</head>
	<body>
		<header>
			<h1>Twój wynik</h1>
		</header>
		<main>
			<article>
				<section>
					<div class="wynik">
						<?php
                     $mk=new waga;
$mk->m1();
?>
					</div>
				</section>
			</article>
		</main>
	</body>
</html>
