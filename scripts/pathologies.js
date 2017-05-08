document.addEventListener("DOMContentLoaded", function(event) {
    	var typeSelect = $('#typeFilter');
		typeSelect.change(function(){
			$("#filterForm").submit();
		});
});

document.addEventListener("DOMContentLoaded", function(event) {
    	var meridienSelect = $('#meridienFilter');
		meridienSelect.change(function(){
			$("#filterForm").submit();
		});
});

document.addEventListener("DOMContentLoaded", function(event) {
    	var caracteristiqueSelect = $('#caracteristiqueFilter');
		caracteristiqueSelect.change(function(){
			$("#filterForm").submit();
		});
});

