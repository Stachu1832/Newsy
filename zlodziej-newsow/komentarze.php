<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="/Ikona/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/Ikona/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/Ikona/favicon-16x16.png">
        <link rel="manifest" href="/Ikona/site.webmanifest">
		<meta charset="UTF-8">
		<meta name="description" content="Prosty system newsów">
		<meta name="keywords" content="Newsy">
		<meta name="author" content="Stanisław Witkiewicz,Bartek Wiśniewski,Dawid Mazurek">
		<link rel="stylesheet" href="style.css">
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
			<img src="logo_5.png">
		</div>
		
		<div id="pasek" class="pasek">
			<a href="/index.php"><img src="white-home.jpg" width="20px" height="20px"></a>
			<a href="/Sport/sport.php">Sport</a>
			<a href="/Polityka/polityka.php">Polityka</a>
			<a href="/Autorzy/autorzy.php">Autorzy</a>
		</div>

	<main>

		<div id="dane">
			
		</div>

	</main>
		
	<footer class="stopka">
	
		<a href="/" onClick="op('poka'); return false;">Pokaż komentarze</a>
		
		<div id="poka" style="display:none">
		
			<form action="komentarze.php" method="POST">            
				<div class="gora-forma">Autor:<br></div>
				<input type="text" name="autor" size="66" maxlength="20"><br>
				<label for="tresc">Treść:<br></label>
				<textarea name="tresc" cols="65" rows="8"></textarea> <br>
				<input type="hidden" name="id_newsa" value="'.$news.'"/>
				<input class="przycisk-wyślij" type="submit" onclick="komunikat()" value="Akceptuj"><p>
			</form>
		
			
		<?php
		
			error_reporting(E_ERROR | E_PARSE);

		
			$con= mysqli_connect('fdb1029.awardspace.net', '3746661_newsy','NewsBase1425#', '3746661_newsy');
		
			$data=date('Y-m-d H:i'); //aktualna data
			$tresc = $_POST['tresc'];
			$autor = $_POST['autor'];
			$id_newsa = $_POST['id_newsa'];
			$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			
			$ip = isset($_SERVER['HTTP_CLIENT_IP']) 
			? $_SERVER['HTTP_CLIENT_IP'] 
			: (isset($_SERVER['HTTP_X_FORWARDED_FOR']) 
			? $_SERVER['HTTP_X_FORWARDED_FOR'] 
			: $_SERVER['REMOTE_ADDR']);
			
			
			$kw1="INSERT INTO komentarze(autor, tresc, data, ip ,host, id_newsa) VALUES ('$autor','$tresc','$data','$ip','$host', '$id_newsa');";
			
			mysqli_query($con, $kw1);
			
			header('Location: /index.php');
			exit;
			
			mysqli_close($con);
		
		?>
	</div>
	</footer>
		
	

	</body>
</html>
