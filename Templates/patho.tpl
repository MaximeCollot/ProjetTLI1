<h1>Pathologies</h1>
	{foreach from=$list_patho key=key item=categorie}
		<div class="typePatho">
		<h2>Type de pathologie : {$key}</h2>
		{foreach from=$categorie key=key item=meridien}
			<div class="meridien">
			<h3>Méridien : {$key}</h3>
			{foreach from=$meridien key=key item=carac}
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
			{/foreach}
			</div>
		{/foreach}
		</div>
	{/foreach}