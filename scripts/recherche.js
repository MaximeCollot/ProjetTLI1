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
	$.ajax({
            url : 'ws.php',
            crossDomain : true,
            method : 'GET',
            data : {"keywordList" : keywordsToSend},
            dataType : 'json',
            
            success : function(data){
            	console.log(data.pathos);
            	$.each(data.pathos, function(typePatho, meridienElement){
            		$('#result').append("<div class='typePatho' id='"+typePatho+"'><h2>Type de pathologie : "+typePatho+"</h2></div>");
            		$.each(meridienElement, function(meridien, caracteristiqueElement){
            			$('#'+typePatho.replace("/","\\/")).append("<div class='meridien' id='"+meridien.replace(" ","_")+"'><h3>Méridien : "+meridien+"</h3></div>");
            			$.each(caracteristiqueElement, function(caracteristique, pathologieElements){
            				if (caracteristique != "neant"){
            					$('#'+meridien.replace(" ","_")).append("<h4>Caracteristique : "+caracteristique+"</h4>");
            				}
            				$.each(pathologieElements, function(index, pathologieElement){
            					$('#'+meridien.replace(" ","_")).append("<h4>Pathologie : "+pathologieElement.pathologie+"</h4>");
            					$.each(pathologieElement.symptomes, function(index, symptome){
            						$('#'+meridien.replace(" ","_")).append("<h5>Symptome : </h5><p>"+symptome+"</p>");
            					})
            				});
            			});
            		});
            	});
            }
    });

}