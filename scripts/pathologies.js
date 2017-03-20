document.addEventListener("DOMContentLoaded", function(event) {
    	var typeSelect = document.getElementsByName("type")[0];
    	console.log(typeSelect);
    	if (typeSelect){
			typeSelect.addEventListener("change",function(){
				typeSelect.form.submit()
			});
    	}
});

