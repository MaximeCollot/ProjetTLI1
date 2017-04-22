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
	$('#keywordList').append(button);
	$('#btn_'+keyword).button({
		label: keyword,
		icon: "ui-icon-close"
	});
	keywordList.push(keyword);
}

var deleteKeyword = function(keyword){
	console.log("delete");
	$('btn_'+keyword).remove();
	delete keywordList[keyword];
}