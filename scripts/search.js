document.addEventListener("DOMContentLoaded", function(event) {
    var searchbar = document.getElementsByName("input-searchbar")[0];
    if (searchbar){
        searchbar.addEventListener("input",function(){
            if (searchbar.value.length >= 3) {
                console.log("it works");
            }
        });
    }
});