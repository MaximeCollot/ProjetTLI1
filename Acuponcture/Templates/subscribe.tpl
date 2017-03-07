<h1>Inscription</h1>
<script type='text/javascript' src='scripts/subscription.js'></script>

<form class="w3-container w3-card-4 w3-padding-16 w3-white" method="post" action='index.php?page=home' id="formulaire">
	
		<div class="input-group">
			<label class="label-suscribe" for="idperso">Identifiant&nbsp;:</label>
			<input  class="input-subscripe" type="text" id="idperso" name="idperso" tabindex="1" placeholder="Identifiant" required>
		</div>
		<div class="input-group">
			<label class="label-suscribe" for="email_addr">Adresse e-mail&nbsp;:</label>
			<input class="input-subscripe" type="email" id="email_addr" name="email_addr" tabindex="2" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="adresse@mail.fr" required>
		</div>
		<div class="input-group">
			<label class="label-suscribe" for="email_addr_repeat">Confirmez l'adresse e-mail&nbsp;:</label>
			<input class="input-subscripe" type="email" id="email_addr_repeat" name="email_addr_repeat" tabindex="3" placeholder="adresse@mail.fr" required 
			onchange="checkConfirmEmail(this)">
		</div>
		<div class="input-group">
		<label class="label-suscribe" for="password">Mot de passe (au moins 6 caractères alphanumériques)&nbsp;:</label>
			<input class="input-subscripe" type="password" id="password" name="password" pattern="[A-Za-z0-9]{6,}" placeholder="Password" required>
		</div>
		<div class="input-group">
			<label class="label-suscribe" for="password_repeat">Confirmez le mot de passe&nbsp;:</label>
			<input class="input-subscripe" type="password" id="password_repeat" name="password_repeat" placeholder="Confirm Password" required 
			onchange="checkConfirmPassword(this)">
		</div>
		<div class="input-group">
			<input class="input-subscripe" type="submit" name="inscription" /> 
		</div>
	
</form>
