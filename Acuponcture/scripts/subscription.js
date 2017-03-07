	
function checkConfirmEmail(input) {
	if (input.value != document.getElementById('email_addr').value) {
		input.setCustomValidity('Les adresses mail ne correspondent pas');
	} else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
	}
}

function checkConfirmPassword(input) {
	if (input.value != document.getElementById('password').value) {
		input.setCustomValidity('Les mots de passe ne correspondent pas');
	} else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
	}
}
