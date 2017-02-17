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
	function check(input) {
	  if (input.value != document.getElementById('email_addr').value) {
		input.setCustomValidity('Les deux adresses e-mail ne correspondent pas.');
	  } else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
	  }
	}
	
	function getTotal(form){
        prix_night_int = parseInt((document.getElementById("prix_nights").value).replace("€",""));
        console.log(prix_night_int);
		form.total.value = (form.nights.valueAsNumber * prix_night_int) + 
            ((form.guests.valueAsNumber - 1) * 10) +
            (form.diner.valueAsNumber * 19) + 
            (form.lunch.valueAsNumber * 17)
	}

    
    function checkDate(input){
       if (input.value <= document.getElementById('arrival_dt').value){
           input.setCustomValidity('Date arrivée supérieur à la date de départ');
	  } else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
	  }
    }

/*
 * Script simple de démonstration d'utilisation d'AJAX avec un objet HTTPRequest 
 */ 

/* cette fonction renvoie le prix actuel d'une chambre, qui peut varier en fonction de la saison*/


function getPrix(fm,nb){
	
	
	//création d'un objet permettant de réaliser des requêtes à des services distants
	var xhr = new XMLHttpRequest();
	
	//verification qu'il est possible d'envoyer une requête sur l'oobjet xhr.
	prepareXHR(xhr,fm);
	//ouverture de la requete
	xhr.open("GET", "http://bruno.mascret.fr/tli/ressources/prix.php?nb="+nb, true);
	//envoie de la requête; il sera possible de passer des paramètres GET avec cette requête:
    //comme si on faisait prix.php?toto=truc&titi=valeur2 directement à la main dans un navigateur
	
    //xhr.send("nb="+nb);
    
	xhr.send(null);
    if(xhr.status==200)
        console.log(xhr.response);
}

function traitement(reponse,fm){
	//pensez bien à ce que la ligne suivante implique dans le document HTML!!!
	fm.prix_nights.value=reponse;
    
}
window.onchange = function() {
    traitement((getPrix(document.getElementById("formulaire"),document.getElementById("formulaire").nights.valueAsNumber)) ,document.getElementById("formulaire"));

    getTotal(document.getElementById("formulaire"));
}

window.onload = function() {
    traitement((getPrix(document.getElementById("formulaire"))) ,document.getElementById("formulaire"));
}

function prepareXHR(xhr,fm){
	//création d'une fonction qui se déclenchera chaque fois que l'état de xhr change: 
	// readyState = 4 signifie que le serveur a répondu et que la réponse a été donnée
	//  status = 200 signifie que la requête a bien été envoyée (404 signifierait pas de ressource à cette adresse
	// status = 0 signifie qu'il n'y a pas encore de requête envoyée
	xhr.onreadystatechange = function() {
		
		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
			
			/*xhr.responseText contient la réponse du serveur distant
			 *		 on utilise une fonction traitement (callback) pour traiter cette réponse, histoire de ne pas encombrer le code ici!
			 */
			traitement(xhr.responseText,fm);
			
		}
		
	};	
}