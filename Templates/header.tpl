<!DOCTYPE html >
<html lang="fr">
<head>
	<title>Acupuncture</title>
	<meta charset="utf-8">      
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen and (min-width: 641px)" />
	<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width: 640px)" />

	<script type='text/javascript' src='scripts/header.js'></script>
	<script type='text/javascript' src='scripts/pathologies.js'></script>
</head>
<body>
	<header>
		<nav class="headerNav">
			<a href="index.php?page=home" class="header-button-left currentPage" tabindex="1" accesskey="w">Accueil</a>
			<a href="index.php?page=patho" class="header-button-left" tabindex="10" accesskey="s">Symptomes</a>
			{if $identifiant == ''}
			<a href="#" onclick="showConnect()" class="header-button-right" tabindex="2" accesskey="c">Connexion</a>
			<a href="index.php?page=subscribe" class="header-button-right" tabindex="3" accesskey="i">Inscription</a>
			{else}
			<div id="identifiant">{$identifiant}</div>
			<a href="index.php?page={$page}&deconnect=true" class="header-button-right" tabindex="5" accesskey="d">Déconnexion</a>
			{/if}
		</nav>    
		<div id="connectBar" hidden>
			<form action="index.php?page={$page}" method="post">
				<label for="mail">
					Mail :
				</label>
				<input type="email" name="mail" id="mail" required>
				<label for="password">
					Mot de passe :
				</label>
				<input type="password" name="password" id="password" required>
				<button type="submit" name="connection" class="">Valider</button>
			</form>
		</div>  
	</header>

	<div id='content'>