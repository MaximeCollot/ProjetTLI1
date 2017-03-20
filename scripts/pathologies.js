document.addEventListener("DOMContentLoaded", function(event) {
    	var typeSelect = document.getElementsByTagName("option")[0];
    	console.log(typeSelect);
    	if (typeSelect){
			typeSelect.addEventListener("change",function(){
				typeSelect.form.submit()
			});
    	}
});

