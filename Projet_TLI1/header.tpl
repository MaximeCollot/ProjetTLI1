<!DOCTYPE html >
<html lang="fr">
	<head>
		<title>Home Page</title>
		<meta charset="utf-8">      
	    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	    <link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
	    <link rel="stylesheet" type="text/css" href="css/mobile.css" media="mobile" />
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	    <script type='text/javascript' src='scripts/header.js'></script>
	</head>
	<body>
	<header>
		<nav class="headerNav">
	                <a href="#" onclick="goToWelcome()" class="header-button-left currentPage" tabindex="-1" accesskey="w">Accueil</a>
	                <a href="#" class="header-button-left" tabindex="-1" accesskey="s">Symptomes</a>
	                <a href="#" onclick="showConnect()" class="header-button-right" tabindex="-1" accesskey="c">Connexion</a>
	                <a href="#" onclick="goToSubscribe()" class="header-button-right" tabindex="-1" accesskey="i">Inscription</a> 
		</nav>    
		<div id="connectBar" hidden aria-hidden=true>
			<form>
				<label for="mail">
					Mail :
				</label>
				<input type="email" name="mail" id="mail">
				<label for="password">
					Mot de passe :
				</label>
				<input type="password" name="password" id="password">
				<button type="submit" class="">Valider</button>
			</form>
		</div>  
	</header>