<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="/Ikona/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/Ikona/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/Ikona/favicon-16x16.png">
        <link rel="manifest" href="/Ikona/site.webmanifest">
		<meta charset="UTF-8">
		<meta name="description" content="Newsy Sportowe">
		<meta name="keywords" content="Newsy Sportowe">
		<meta name="author" content="Stanisław Witkiewicz,Bartek Wiśniewski,Dawid Mazurek">
		<title>Kiwior znokautował kolegę</title>
		<link rel="stylesheet" href="/style_podstrony.css">
	</head>
		<script>
			
			function komunikat()
			{
				alert("Komentarz został dodany");
			}
		
			function op(obj) 
			{
			x=document.getElementById(obj);
			if(x.style.display == "none") x.style.display = "block";
			else x.style.display = "none"
			}
		</script>
		
		
		
		
	<body>
		
		<div id="baner">
			<img src="/logo_5.png">
		</div>
		
		<div id="pasek" class="pasek">
			<a href="/index.php"><img src="/white-home.jpg" width="20px" height="20px"></a>
			<a href="/Sport/sport.php">Sport</a>
			<a href="/Polityka/polityka.php">Polityka</a>
			<a href="/Autorzy/autorzy.php">Autorzy</a>
		</div>

	<main>

		<div id="dane">
		
			<div class="blok">
				<center> <h1>Kiwior znokautował kolegę z Arsenalu. Koszmarna kontuzja, lała się krew</h1></center>
			</div>
			
			<div class="lewy"> 
				
			</div>
			
			<div class="środek">
            
    
				<p class="tekst">Arsenal pokonał 3:1 Burnley w sobotnim meczu 12. kolejki Premier League. W końcówce doszło do niebezpiecznej sytuacji, w którą zamieszany był Jakub Kiwior. Jak pokazały powtórki telewizyjne, Polak w zamieszaniu pod bramką przypadkowo kopnął w głowę swojego kolegę z zespołu, Jorginho. Pomocnik padł na murawę i zalał się krwią. Trzeba mu było szybko udzielić pomocy.</p><br>
				
				<img src="https://bi.im-g.pl/im/37/fc/1c/z30395703IH,Jakub-Kiwior--Jorginho.jpg" alt="Kop Kiwiora" >
				
				<p class="tekst">Arsenal w sobotę odniósł już ósme zwycięstwo w tym sezonie Premier League. Tym razem piłkarze Mikela Artety pokonali przed własną publicznością jedną z najsłabszych drużyn ligi - Burnley. Wynik otworzył w doliczonym czasie gry pierwszej połowy Leandro Trossard. </p>
				<h2>Arsenal wygrał z Burnley. Kiwior napędził stracha kibicom w pechowej akcji</h2>
				
				<p class="tekst">Po zmianie stron dość niespodziewanie wyrównali goście, a konkretnie Josh Brownhill. Piłka uderzona przez niego odbiła się jeszcze po drodze od jednego z piłkarzy w zamieszaniu w polu karnym i zaskoczyła golkipera Arsenalu. To był jednak szczyt możliwości Burnley w tym spotkaniu.</p>
				
				<p class="tekst">Potem strzelali już tylko gospodarze. W 57. minucie gola na 2:1 strzelił William Saliba. Niewiele ponad kwadrans później podwyższył znów Ołeksandr Zinczenko. Arsenal kontrolował przebieg boiskowych wydarzeń w kolejnych minutach, jednak w końcówce zrobiło się nerwowo. W 83. minucie czerwoną kartę za brutalny faul obejrzał Fabio Vieria. Mikel Arteta postanowił zatem wzmocnić defensywę, by bronić wyniku. Dlatego też wpuścił na boisko Jakuba Kiwiora. 

				Polak zameldował się na placu gry i w samej końcówce brał udział w bardzo niebezpiecznej sytuacji. Próbując zablokować strzał rywali, niefortunnie kopnął w głowę swojego kolegę z drużny, Jorginho. Włoch także chciał wybić piłkę i ustawił się za Kiwiorem. Ten nie mógł go widzieć i stąd pechowy cios. Jorginho  padł na murawę, a Kiwior natychmiast ruszył z pomocą. </p>
				
				<div class="autor_newsa">Autor Newsa: <b>Dawid Mazurek</b></div>  
				<div class="data_newsa">2023-11-24 14:10</div> 
				
			</div>
        
			<div class="prawy">

			</div>
			
		</div>

	</main>
		
	<footer class="stopka">
	
		<a href="/" onClick="op('poka'); return false;">Pokaż komentarze</a>
		
		<div id="poka" style="display:none">
		
			<form action="/komentarze.php" method="POST">            
				<div class="gora-forma">Autor:<br></div>
				<input type="text" name="autor" size="66" maxlength="20" required autocomplete="off"><br>
				<label for="tresc">Treść:<br></label>
				<textarea name="tresc" cols="65" rows="8"  required autocomplete="off"></textarea> <br>
				<input type="hidden" name="id_newsa" value="1"/>
				<input class="przycisk-wyślij" type="submit" onclick="komunikat()" value="Akceptuj"><p>
			</form>
		
			
		<?php
		
		error_reporting(E_ERROR | E_PARSE);

		
		$con= mysqli_connect('fdb1029.awardspace.net', '3746661_newsy','NewsBase1425#', '3746661_newsy');
		
		$kw2= "SELECT  autor,tresc,data FROM komentarze,newsy WHERE komentarze.id_newsa=newsy.id And komentarze.id_newsa=1 order by data DESC;";
		
		$wynik=mysqli_query($con, $kw2);

		while ($wiersz = mysqli_fetch_row($wynik)) 
		{
			echo "
				<div id='komentarze'>
					<div class='autor'><b>$wiersz[0]</b> pisze:</div> 
					<div class='data'>$wiersz[2]</div> 
					<div class='tresc'>
						<p> $wiersz[1] </p>
					</div> 
				</div>
			";
		}
		
		
		
    mysqli_close($con);

	?>
	</div>
	</footer>
		
	

	</body>
</html>
