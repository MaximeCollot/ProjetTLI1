<h1>Recherche de Pathologie</h1>
<form id="keywordBar" action="javascript:void(0);" onsubmit="addKeyword(this.keywordInput.value)">
<label for="keywordInput">Entrez le mot-clé de votre recherche : </label>
<input type="text" id="keywordInput" name="keywordInput" autocomplete="off">
<input type="submit" id="keywordButton" name="keywordButton" value="ajouter">
</div>
<div id="keywordList">
<h2>Liste de mots-clés : </h2>
</div>
<div id="result">
</div>
{html_options id=keywords name=keywords values=$keywords output=$keywords}