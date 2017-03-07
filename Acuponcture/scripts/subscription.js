	
function checkConfirmEmail(input) {
	if (input.value != document.getElementById('email_addr').value) {
		input.setCustomValidity('Les mails ne sont pas identiques');
        input.setAttribute("aria-invalid", true);
	} else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
        input.setAttribute("aria-invalid", false);
	}
    console.log(input);
}

function checkConfirmPassword(input) {
	if (input.value != document.getElementById('password').value) {
		input.setCustomValidity('Les mots de passe ne sont pas identiques');
        input.setAttribute("aria-invalid", true);
	} else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
        input.setAttribute("aria-invalid", false);
	}
    console.log(input);
}

function checkUsername(input) {
	if (input.value != document.getElementById('idperso').value) {
		input.setCustomValidity('Le nom d\'utilisateur est trop court');
        input.setAttribute("aria-invalid", true);
	} else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
        input.setAttribute("aria-invalid", false);
	}
    console.log(input);
}