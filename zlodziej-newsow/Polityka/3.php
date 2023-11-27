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
		<title>Spięcie marszałka Sejmu z pracownikiem TVP Info</title>
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
				<center><h1>Spięcie marszałka Sejmu z pracownikiem TVP Info</h1></center>
			</div>
			
			<div class="lewy"> 
				
			</div>
			
			<div class="środek">
				
				<p class="tekst">To chciał pan powiedzieć?</p>

				<img src="https://ocdn.eu/pulscms-transforms/1/umxk9kpTURBXy9mMTAzOWM5NGM5OTFmZDU3NTc4ZTBjOTA4ZGViNmFhNC5qcGeTlQMAzLLNFlDNDI2TBc0DFM0BvJMJpjQzMGUwNwbeAAGhMAY/szymon-holownia.avif" alt="szymon holownia">

				<p class="tekst">— Już panu wyjaśniam — zaczął marszałek Sejmu. — Cały problem polega na tym, że jeżeli chodzi o używanie Pegasusa, to służby specjalne są podejrzane o używanie go w nieuprawniony sposób — odpowiedział. — Jeżeli masz co do kogoś jakieś podejrzenia, to prosisz innych, żeby zweryfikowali te podejrzenia, a nie samego zainteresowanego — dodał.
		Ocenił, że sprawa Pegasusa "bulwersuje miliony Polaków".</p>

				<h2>Później Szymon Hołownia mówił o badaniu wpływów rosyjskich</h2>
        
        		<p class="tekst">— Przypomnę panu, ale też i wszystkim, że PiS rządziło w Polsce osiem lat, miało wszystkie narzędzia i wszystkie służby świata do tego, żeby złapać każdy wpływ rosyjski, jaki tylko mógł się w Polsce pojawić — stwierdził.
				— Te wpływy rosyjskie były właśnie też wśród służb specjalnych w tamtych latach — wtrącił pracownik TVP Info. — Chce pan powiedzieć, że za rządów Jarosława Kaczyńskiego jako wicepremiera do spraw bezpieczeństwa w służbach polskich były rosyjskie wpływy?
 				To chciał pan powiedzieć? To przerażające — odparł Hołownia</p>
        
					
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
				<input type="hidden" name="id_newsa" value="6"/>
				<input class="przycisk-wyślij" type="submit" onclick="komunikat()" value="Akceptuj"><p>
			</form>
		
			
		<?php
		
		error_reporting(E_ERROR | E_PARSE);

		
		$con= mysqli_connect('fdb1029.awardspace.net', '3746661_newsy','NewsBase1425#', '3746661_newsy');
		
		$kw2= "SELECT  autor,tresc,data FROM komentarze,newsy WHERE komentarze.id_newsa=newsy.id And komentarze.id_newsa=6 order by data DESC;";
		
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
