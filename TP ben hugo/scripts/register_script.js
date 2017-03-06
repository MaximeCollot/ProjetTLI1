
function checkMail(input) {
  if (input.value != document.getElementById('email_addr').value) {
	input.setCustomValidity('Les deux adresses e-mail ne correspondent pas.');
  } else {
	// le champ est valide : on réinitialise le message d'erreur
	input.setCustomValidity('');
  }
}

function checkPassword(input) {
  if (input.value != document.getElementById('motdepasse').value) {
	input.setCustomValidity('Les deux mots de passe ne correspondent pas.');
  } else {
	// le champ est valide : on réinitialise le message d'erreur
	input.setCustomValidity('');
  }
}

function createAccount(form){

	//creer le compte dans la bdd

}