<h1>Inscription</h1>
<script type='text/javascript' src='scripts/subscription.js'></script>

<form class="form-subscribe" method="post" action="lib/main.php?variable=truc" id="formulaire">
	
		<div class="input-group">
			<label class="label-suscribe" for="idperso">Identifiant&nbsp;:</label>
			<input  class="input-subscripe" type="text" id="idperso" name="idperso" tabindex="10" placeholder="Identifiant" aria-required="true" required>
		</div>
		<div class="input-group">
			<label class="label-suscribe" for="email_addr">Adresse e-mail&nbsp;:</label>
			<input class="input-subscripe" type="email" id="email_addr" name="email_addr" tabindex="11" placeholder="adresse@mail.fr" aria-required="true" required>
		</div>
		<div class="input-group">
			<label class="label-suscribe" for="email_addr_repeat">Confirmez l'adresse e-mail&nbsp;:</label>
			<input class="input-subscripe" type="email" id="email_addr_repeat" name="email_addr_repeat" tabindex="12" placeholder="adresse@mail.fr" aria-required="true" aria-invalid="false" required 
			onblur="checkConfirmEmail(this)">
		</div>
		<div class="input-group">
		<label class="label-suscribe" for="password">Mot de passe&nbsp;:</label>
			<input class="input-subscripe" type="password" id="password" name="password" tabindex="13" placeholder="Password" aria-required="true" required>
		</div>
		<div class="input-group">
			<label class="label-suscribe" for="password_repeat">Confirmez le mot de passe&nbsp;:</label>
			<input class="input-subscripe" type="password" id="password_repeat" name="password_repeat" tabindex="14" placeholder="Confirm Password" aria-required="true" aria-invalid="false" required 
			onblur="checkConfirmPassword(this)">
		</div>
		<div class="input-group">
			<input class="input-subscripe" type="submit" value="inscription" tabindex="15" /> 
		</div>
	
</form>
