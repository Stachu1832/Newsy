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
		<title>Sygnał dla Donalda Tuska</title>
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
				<center> <h1>Sygnał dla Donalda Tuska</h1></center>
			</div>
			
			<div class="lewy"> 
				
			</div>
			
			<div class="środek">
            
    
				<h2>KO notuje spory spadek</h2><br>
				
				<img src="https://ocdn.eu/pulscms-transforms/1/GhMk9kuTURBXy8yZDVkOTMyOS0xZjRmLTQ3YjItOWYzNy03OTMxYjA2OGIyZTMuanBlZ5OVAwDMrc0VwM0MPZMFzQMUzQG8kwmmNWQzNWI0Bt4AAaEwBg/donald-tusk.avif" alt="Donald Tusk" >
				
				<p class="tekst">Gdyby wybory odbyły się w najbliższą niedzielę, to Prawo i Sprawiedliwość znów uzyskałoby najlepsze notowania — wynika z sondażu United Surveys dla Wirtualnej Polski.
		Niezadowolona może być Koalicja Obywatelska, która zaliczyła największy spadek poparcia, wykraczający poza błąd statystyczny.</p>
				
				<p class="tekst">W porównaniu z badaniem z początku listopada to spadek poparcia o 1,9 pkt proc.
                        Na drugim miejscu znalazła się KO. Na formację, której liderem jest Donald Tusk, chce głosować 26,7 proc. ankietowanych. To spadek poparcia aż o 3,7 pkt proc.
Podium z wynikiem 14,4 proc. zamyka Trzecia Droga — ugrupowanie, którego twarzami są Szymon Hołownia i Władysław Kosiniak-Kamysz, zalicza spadek o 1,7 pkt proc. względem poprzedniego badania.</p>

				
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
				<input type="hidden" name="id_newsa" value="5"/>
				<input class="przycisk-wyślij" type="submit" onclick="komunikat()" value="Akceptuj"><p>
			</form>
		
			
		<?php
		
		error_reporting(E_ERROR | E_PARSE);

		
		$con= mysqli_connect('fdb1029.awardspace.net', '3746661_newsy','NewsBase1425#', '3746661_newsy');
		
		$kw2= "SELECT  autor,tresc,data FROM komentarze,newsy WHERE komentarze.id_newsa=newsy.id And komentarze.id_newsa=5 order by data DESC;";
		
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
