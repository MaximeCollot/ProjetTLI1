document.addEventListener("DOMContentLoaded", function(event) {
    	var typeSelect = document.getElementsByTagName("option")[0];
    	if (typeSelect){
			typeSelect.addEventListener("change",function(){
				typeSelect.form.submit()
			});
    	}
});

