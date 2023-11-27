<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="apple-touch-icon" sizes="180x180" href="/Ikona/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/Ikona/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/Ikona/favicon-16x16.png">
        <link rel="manifest" href="/Ikona/site.webmanifest">
		<meta charset="UTF-8">
		<meta name="description" content="Pogoda">
		<meta name="keywords" content="Pogoda">
		<meta name="author" content="Stanisław Witkiewicz,Bartek Wiśniewski,Dawid Mazurek">
		<title>Pogoda</title>
		<link rel="stylesheet" href="/style.css">
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
			<a href="/Pogoda/pogoda.php">Pogoda</a>
			<a href="/Autorzy/autorzy.php">Autorzy</a>
		</div>

	<main>

		<div id="dane">
			<div id="tytul">Pogoda</div>

			<div id="tp-widget-default" data-city="133232" data-version="2.0.0">
			<div id="tp-widget-bottom-default">
				<a id="tp-widget-flink-default" href="https://www.twojapogoda.pl/prognoza-godzinowa-polska/pomorskie-gdansk/" target="_blank" rel="nofollow" title="Gdańsk - prognoza godzinowa">Godzina po godzinie</a>
				<a id="tp-widget-flink-second" href="https://www.twojapogoda.pl/prognoza-16dni-polska/pomorskie-gdansk/" target="_blank" rel="nofollow" title="Gdańsk - prognoza na 16 dni">Na 16 dni</a>
				<a id="tp-widget-mlink-default" href="https://www.twojapogoda.pl" target="_blank" rel="nofollow" title="TwojaPogoda.pl - Pogoda w Polsce i na świecie - pogoda na 16 dni"></a>
			</div>
			<script type="text/javascript">
				(function (t, p, w, d, g) {
					if (t.getElementById(w)) return;
					d = t.getElementsByTagName(p)[0], g = t.createElement(p);
					g.id = w; g.src = "https://widget.twojapogoda.pl/default/main.js";g.charset="UTF-8";
					d.parentNode.appendChild(g);
				}(document, "script", "tp-widget-script-default"));
			</script>
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
				<input type="hidden" name="id_newsa" value="10"/>
				<input class="przycisk-wyślij" type="submit" onclick="komunikat()" value="Akceptuj"><p>
			</form>
		
			
		<?php
		
		error_reporting(E_ERROR | E_PARSE);

		
		$con= mysqli_connect('fdb1029.awardspace.net', '3746661_newsy','NewsBase1425#', '3746661_newsy');
		
		$kw2= "SELECT  autor,tresc,data FROM komentarze,newsy WHERE komentarze.id_newsa=newsy.id And komentarze.id_newsa=10 order by data DESC;";
		
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
