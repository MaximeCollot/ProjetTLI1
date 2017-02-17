<!DOCTYPE html >
<html lang="fr">
	<head>
		<title>Home Page</title>
		<meta charset="utf-8">      
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
        <link rel="stylesheet" type="text/css" href="css/mobile.css" media="mobile" />

        <script type='text/javascript' src='scripts/welcome.js'></script>
	</head>
	<body>
	<header>
		<nav class="headerNav" role="menubar">
	                <a href="/welcome.html" class="header-button-left currentPage" tabindex="1" accesskey="a">Accueil</a>
	                <a href="/page2.html" class="header-button-left" tabindex="2" accesskey="z">Symptomes</a>
	                <a href="#" onclick="showConnect()" class="header-button-right" tabindex="4" accesskey="c">Connexion</a>
	                <a href="/subscription.html" class="header-button-right" tabindex="5" accesskey="i">Inscription</a> 
		</nav>    
		<div id="connectBar" hidden="true">
			<form>
				<label>
					Mail :
				</label>
				<input type="email" name="mail">
				<label>
					Mot de passe :
				</label>
				<input type="password" name="password">
				<button type="submit" class="">Valider</button>
			</form>
		</div>  
	</header>
	

	<footer>
		<nav>
			<a href="about.html" tabindex="51" accesskey="a">About</a></li>
			<a href="contact.html"  tabindex="52" accesskey="c">Contact</a>
	        <a href="http://jigsaw.w3.org/css-validator/check/referer">
	            <img style="border:0;width:88px;height:31px"
	                src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
	                alt="CSS Valide !" />
	        </a>
	        <a href="https://www.totalvalidator.com/index.html">
	            <img style="border:0;width:88px;height:31px"
	                src="ressources/valid_n_html_5.gif" 
	                alt="HTML Valide" />
	        </a>
	    </nav>
	</footer>
	
	</body>
</html>