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
		<title>Powrót Najmana do klatki</title>
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
				<center><h1>Marcin Najman wraca do klatki! Już wie, z kim zawalczy. "Psikuta"</h1></center>
			</div>
			
			<div class="lewy"> 
				
			</div>
			
			<div class="środek">
				
				<p class="tekst">Choć Marcin Najman niedługo skończy 45 lat i kolekcjonuje porażki, to wciąż zarabia wielkie pieniądze we freak fightach, a ludzie czekają na kolejne jego walki. Pod koniec grudnia zobaczymy go na gali Clout MMA i będzie to jego.. piąte starcie w tym roku! "Cesarz freak fightów" już wie, z kim zawalczy. Nagrał nawet filmik, w którym zaczepia rywala, nawiązując do słynnej polskiej komedii</p>
				<img src="https://bi.im-g.pl/im/2b/07/1d/z30439723IH,Najman-vs--Psikuta.jpg" alt="najman">
				<p class="tekst">2023 rok Marcin Najman zaczął od zwycięstwa z 49-letnim Pawłem Jóźwiakiem, prezesem federacji FEN, który dziś szuka popularności i wielkich pieniędzy we freak fightach. Najman wygrał na punkty i tym samym zrewanżował się za porażkę z Jóźwiakiem na gali Wotore, gdy został znokautowany pierwszym ciosem.</p>
				<p class="tekst">Po wygranej z Jóźwiakiem, Najman przegrał trzy walki z rzędu. Były znakomity pięściarz znokautował "Cesarz freak fightów" w zaledwie 16 sekund. Ale przecież nikt się nie łudzi, że Najman będzie dostarczał ciekawych walk, kibice przede wszystkim chcą oglądać jego show na konferencjach prasowych.

					Najman wrócił do klatki na gali Clout MMA 2, gdzie najpierw zmierzył się z Piotrem Lizakowskim, a następnie z Adrianem Ciosem. I choć 24-letni "Lizak" był lżejszy o kilkadziesiąt kilogramów od Najmana, to nie dał sobie zrobić krzywdy. Ba! W ciągu trzech rund nie przyjął żadnego uderzenia, a sam kąsał Najmana, a nawet próbował go poddać duszeniem zza pleców. No i pewnie wygrał na punkty.
					
					Następnie Najman chwilę ochłonął w szatni i jeszcze tego samego wieczora wrócił do klatki, by zmierzyć się z Adrianem Ciosem, jednym z najsłabszych freaków, ale że jest kontrowersyjną postacią, to dostaje duże walki. 
					
					Najman przegrał z Ciosem przed dyskwalifikację, po tym jak - pomimo ostrzeżeń sędziego - wielokrotnie uderzał rywala w tył głowy. Po gali Najman złożył protest, ale Clout MMA nie zmieniło werdyktu. Dla Najmana były to już porażki nr.  10. i 11. w karierze, nie licząc porażek na bokserskim ringu.</p>
					
					<div class="autor_newsa">Autor Newsa: <b>Dawid Mazurek</b></div>  
					<div class="data_newsa">2023-11-24 15:30</div> 
					
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
				<input type="hidden" name="id_newsa" value="3"/>
				<input class="przycisk-wyślij" type="submit" onclick="komunikat()" value="Akceptuj"><p>
			</form>
		
			
		<?php
		
		error_reporting(E_ERROR | E_PARSE);

		
		$con= mysqli_connect('fdb1029.awardspace.net', '3746661_newsy','NewsBase1425#', '3746661_newsy');
		
		$kw2= "SELECT  autor,tresc,data FROM komentarze,newsy WHERE komentarze.id_newsa=newsy.id And komentarze.id_newsa=3 order by data DESC;";
		
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
