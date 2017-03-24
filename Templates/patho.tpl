<h1>Pathologies</h1>
	Filtre : 
	<form action="index.php?page=patho" method="post">
		{html_options name=typeFilter values=$typeListFilter output=$typeListFilter selected=$typeSelected}
 		{html_options name=meridienFilter values=$meridienListFilter output=$meridienListFilter selected=$meridienSelected }
		{html_options name=caracteristiqueFilter values=$caracteristiqueListFilter output=$caracteristiqueListFilter selected=$caracteristiqueSelected }
		<input type="submit" name="Filtrer" value="Filtrer" hidden>
	</form>
	{foreach from=$list_patho key=key item=categorie}
		{if $key == $typeSelected || $typeSelected == 'Tous'}
		<div class="typePatho">
		<h2>Type de pathologie : {$key}</h2>
		{foreach from=$categorie key=key item=meridien}
		{if $key == $meridienSelected || $meridienSelected == 'Tous'}
			<div class="meridien">
			<h3>Méridien : {$key}</h3>
			{foreach from=$meridien key=key item=carac}
				{if $key == $caracteristiqueSelected || $caracteristiqueSelected == 'Tous'}
				{if $key != 'neant'}
				<h4>Caratéristique : {$key}</h4>
				{/if}
				{foreach from=$carac key=key item=pathologie}
					<h5>Pathologie : {$pathologie->getDescription()}</h5>
					<h5>Symptome :</h5>
					{foreach from=$pathologie->getSymptomes() key=key item=symptome}
						<p>{$symptome}</p>
					{/foreach}
				{/foreach}
				{else}
					Aucune pathologie
				{/if}
			{/foreach}
			</div>
			{/if}
		{/foreach}
		</div>
		{/if}
	{/foreach}