	// $.ajax({
 //            url : 'ws.php',
 //            jsonp : 'Keywords',
            
 //            success : function(data){
 //            	console.log(data);
 //            }
 //    });

 var keywords=null;
 var keywordList=[];

 document.addEventListener("DOMContentLoaded", function(event) {
    	keywords = $.map($('#keywords option'), function(option){
    		return option.value;
    	})
    	$('#keywordInput').autocomplete({source : keywords});
    	$('#keywords').remove();
});

var addKeyword = function(keyword){

	var button = document.createElement('button');
	button.setAttribute("id", "btn_"+keyword);
	console.log(button);
	$('#keywordList').append(button);
	$('#btn_'+keyword.replace(" ", "\\ ")).button({
		label: keyword,
		icon: "ui-icon-close"
	});
	$('#btn_'+keyword.replace(" ", "\\ ")).click(function(){deleteKeyword(keyword)});
	keywordList.push(keyword);
	console.log(keywordList);
}

var deleteKeyword = function(keyword){
	var resutDelete = $("#btn_"+keyword.replace(" ", "\\ ")).remove();
	var index = keywordList.indexOf(keyword);
	keywordList.splice(index, 1);
}