document.addEventListener("DOMContentLoaded", function(event) {
    	var typeSelect = $('#typeFilter');
    	if (typeSelect.length){
			typeSelect.addEventListener("change",function(){
				typeSelect.form.submit()
			});
    	}
});

document.addEventListener("DOMContentLoaded", function(event) {
    	var meridienSelect = $('#meridienFilter');
    	if (meridienSelect.length){
			meridienSelect.addEventListener("change",function(){
				meridienSelect.form.submit()
			});
    	}
});

document.addEventListener("DOMContentLoaded", function(event) {
    	var caracteristiqueSelect = $('#caracteristiqueFilter');
    	if (caracteristiqueSelect.length){
			caracteristiqueSelect.addEventListener("change",function(){
				caracteristiqueSelect.form.submit()
			});
    	}
});

