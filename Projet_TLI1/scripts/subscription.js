/*Repris et adapté par Bruno Mascret de http://dmouronval.developpez.com/tutoriels/html/formulaires-html5/
 * Les trois auteurs et traducteur
 * 
 * Jan Kleinert *
 * Traducteur : Didier Mouronval
 * Bovino
 * 
 * Licence creative commons By
 * http://creativecommons.org/licenses/by/3.0/deed.fr
 */





function checkDate(input) {
        //to check the date, we need to have the current date :
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var yyyy = today.getFullYear();
            var yyyy2 = yyyy-200;

            if(dd<10) {
                dd='0'+dd
            } 

            if(mm<10) {
                mm='0'+mm
            } 

            today = mm+'/'+dd+'/'+yyyy;
            fewyearsago = mm+'/'+dd+'/'+yyyy2;
            

	//TODO check des dates à verifier  
    if ((input.value > today) || (input.value < fewyearsago)) {
		input.setCustomValidity('Date anniversaire non applicable');
	  } else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
	  }
}
	
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