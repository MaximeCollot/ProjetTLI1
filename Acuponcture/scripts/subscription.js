	
function checkConfirmEmail(input) {
	if (input.value != document.getElementById('email_addr').value) {
		input.setCustomValidity('Mail incorrecte');
	} else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
	}
}

function checkConfirmPassword(input) {
	if (input.value != document.getElementById('password').value) {
		input.setCustomValidity('Password incorrecte');
	} else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
	}
}
