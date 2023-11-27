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
		<title>Niewyobrażalna cena za koszulkę</title>
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
				<center><h1>Niepojęte. 762 tysiące dolarów za koszulkę debiutanta. Kosmos </h1></center>
			</div>
			
			<div class="lewy"> 
				
			</div>
			
			<div class="środek">
				<p class="tekst">Victora Wembanyama przebił wszystkich - nawet LeBrona Jamesa. Młoda gwiazda szturmem bierze NBA i elektryzuje fanów koszykówki na całym świecie. Nic więc dziwnego, że kolekcjonerzy walczyli o koszulkę z jego debiutu w najlepszej lidze świata. Ta sprzedała się na aukcji za niebotyczną kwotę, która ponad dziesięciokrotnie przekracza sumę za inne koszulki największych gwiazd NBA.</p>

				<img src="https://bi.im-g.pl/im/0b/05/1d/z30429451IH,Spurs-Knicks-Basketball.jpg" alt="47">

				<p class="tekst">Victor Wembanyama został wybrany z numerem 1. w Drafcie NBA przez San Antonio Spurs. Francuz już od kilku lat był wskazywany, jako przyszła gwiazda amerykańskiej ligi i koszykówki na całym świecie. 19-latek stał się ulubieńcem kibiców, a eksperci wierzą, że może stać się najlepszym zawodnikiem w historii. Dlatego też o gadżety związane z jego karierą walczą kolekcjonerzy gotowi wydać niebotyczne pieniądze. </p>

				<p class="tekst">Koszulka Wembanyamy z pierwszego meczu w NBA została wylicytowana za 762 tysiące dolarów! Niebotyczna kwota nie tylko przebiła inne aukcje z tego samego okresu, ale również wszystkie w historii ligi. Znany autor książek o sporcie Tommy Beer zauważył, że do tej pory koszulki z debiutów największych gwiazd nie sprzedawały się za więcej niż 50 tysięcy dolarów. 19-latek z San Antonio Spurs pobił więc ten wynik o ponad 15 razy, zostawiając w tyle Jamesa, Stepha Curry'ego i Nikolę Jokicia. </p>
				
				<div class="autor_newsa">Autor Newsa: <b>Dawid Mazurek</b></div>  
				<div class="data_newsa">2023-11-24 14:50</div> 
				
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
				<input type="hidden" name="id_newsa" value="2"/>
				<input class="przycisk-wyślij" type="submit" onclick="komunikat()" value="Akceptuj"><p>
			</form>
		
			
		<?php
		
		error_reporting(E_ERROR | E_PARSE);

		
		$con= mysqli_connect('fdb1029.awardspace.net', '3746661_newsy','NewsBase1425#', '3746661_newsy');
		
		$kw2= "SELECT  autor,tresc,data FROM komentarze,newsy WHERE komentarze.id_newsa=newsy.id And komentarze.id_newsa=2 order by data DESC;";
		
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
