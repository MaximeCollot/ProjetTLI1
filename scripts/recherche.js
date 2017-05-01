	$.ajax({
            url : 'ws.php',
            jsonp : 'Keywords',
            
            success : function(data){
            	console.log(data);
            }
    });

 var keywords=null;
 var keywordList=[];

 document.addEventListener("DOMContentLoaded", function(event) {
	keywords = $.map($('#keywords option'), function(option){
		return option.value;
	})
	$('#keywordInput').autocomplete({source : keywords});
	$('#keywords').remove();
	$('#getPathos').click(function() {
		getPathos();
	});
});


var addKeyword = function(keyword){

	var button = document.createElement('button');
	button.setAttribute("id", "btn_"+keyword);
	$('#keywordList').append(button);
	$('#btn_'+keyword.replace(" ", "\\ ")).button({
		label: keyword,
		icon: "ui-icon-close"
	});
	$('#btn_'+keyword.replace(" ", "\\ ")).click(function(){deleteKeyword(keyword)});
	keywordList.push(keyword);
}

var deleteKeyword = function(keyword){
	var resutDelete = $("#btn_"+keyword.replace(" ", "\\ ")).remove();
	var index = keywordList.indexOf(keyword);
	keywordList.splice(index, 1);
}

var getPathos = function() {
	var keywordsToSend = keywordList.join();
	console.log(keywordsToSend);
	$.ajax({
            url : 'ws.php',
            crossDomain : true,
            method : 'GET',
            data : {"keywordList" : keywordsToSend},
            
            success : function(data){
            	console.log(data);
            }
    });

}