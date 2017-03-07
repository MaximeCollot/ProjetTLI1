<h1>Inscription</h1>
<script type='text/javascript' src='scripts/subscription.js'></script>

<form class="form-subscribe" method="post" action="index.php?page={$page}" id="formulaire">
	
		<div class="input-group">
			<label class="label-suscribe" for="idperso">Identifiant&nbsp;:</label>
			{literal}
			<input  class="input-subscripe" type="text" id="idperso" name="idperso" tabindex="10" pattern="[A-Za-z0-9]{3,}" placeholder="Identifiant" aria-required="true" required onblur="checkUsername(this)">
			{/literal}
		</div>
		<div class="input-group">
			<label class="label-suscribe" for="email_addr">Adresse e-mail&nbsp;:</label>
			{literal}
			<input class="input-subscripe" type="email" id="email_addr" name="email_addr" tabindex="11" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="adresse@mail.fr" aria-required="true" required>
			{/literal}
		</div>
		<div class="input-group">
			<label class="label-suscribe" for="email_addr_repeat">Confirmez l'adresse e-mail&nbsp;:</label>
			{literal}
			<input class="input-subscripe" type="email" id="email_addr_repeat" name="email_addr_repeat" tabindex="12" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="adresse@mail.fr" aria-required="true" aria-invalid="false" required 
			onblur="checkConfirmEmail(this)">
			{/literal}
		</div>
		<div class="input-group">
		<label class="label-suscribe" for="password">Mot de passe&nbsp;:</label>
			{literal}
			<input class="input-subscripe" type="password" id="password" name="password" tabindex="13" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$
" placeholder="Password" aria-required="true" required>
			{/literal}
		</div>
		<div class="input-group">
			<label class="label-suscribe" for="password_repeat">Confirmez le mot de passe&nbsp;:</label>
			{literal}
			<input class="input-subscripe" type="password" id="password_repeat" name="password_repeat" tabindex="14" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$
" placeholder="Confirm Password" aria-required="true" aria-invalid="false" required 
			onblur="checkConfirmPassword(this)">
			{/literal}
		</div>
		<div class="input-group">
			<input class="input-subscripe" type="submit" value="inscription" tabindex="15" /> 
		</div>
	
</form>
