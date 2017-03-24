document.addEventListener("DOMContentLoaded", function(event) {
    	var typeSelect = document.getElementsByName("typeFilter")[0];
    	if (typeSelect){
			typeSelect.addEventListener("change",function(){
				typeSelect.form.submit()
			});
    	}
});

document.addEventListener("DOMContentLoaded", function(event) {
    	var meridienSelect = document.getElementsByName("meridienFilter")[0];
    	if (meridienSelect){
			meridienSelect.addEventListener("change",function(){
				meridienSelect.form.submit()
			});
    	}
});

document.addEventListener("DOMContentLoaded", function(event) {
    	var caracteristiqueSelect = document.getElementsByName("caracteristiqueFilter")[0];
    	if (caracteristiqueSelect){
			caracteristiqueSelect.addEventListener("change",function(){
				caracteristiqueSelect.form.submit()
			});
    	}
});

