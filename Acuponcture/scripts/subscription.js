	
function checkConfirmEmail(input) {
	if (input.value != document.getElementById('email_addr').value) {
		input.setCustomValidity('Mail incorrecte');
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
		input.setCustomValidity('Password incorrecte');
        input.setAttribute("aria-invalid", true);
	} else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
        input.setAttribute("aria-invalid", false);
	}
    console.log(input);
}