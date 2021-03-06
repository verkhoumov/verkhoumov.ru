<div class="search">
	<form method="GET">
		<div class="row">
			<div class="col-12 col-sm">
				<div class="search-form">
					<a href="/projects" class="reset-button">Отменить</a>

					<input type="text" name="q" class="form-control" value="{{{query}}}" placeholder="2016, CodeIgniter, дизайн, практика и т.п.">
				</div>
			</div>

			<div class="col-12 col-sm col-sm-auto mt-4 mt-sm-0">
				<button type="submit" class="button button-primary">Найти</button>
			</div>
		</div>
	</form>

	<p class="help">В качестве запроса можно использовать <u title="2015, 2016, 2017 и т.п.">год</u>, <u title="NodeJS, CodeIgniter, SocketIO и т.п.">название технологии</u>, <u title="Дизайн, разработка, документ и т.п.">тип проекта</u> или просто <u title="ИТМО, практика, диплом и т.п.">слова</u>.</p>
	
	{{#info}}{{#text}}
	<div class="search-info">
		<div class="d-flex justify-content-start align-items-center item {{type}}"{{#color}} style="background: {{color}};"{{/color}}>
			<article>
				<h2>{{name}}</h2>
				<p>{{text}}</p>
				{{#link}}<!--noindex--><p><a href="{{link}}" class="link underline" target="_blank" rel="nofollow">{{link}}</a></p><!--/noindex-->{{/link}}
			</article>
		</div>
	</div>
	{{/text}}{{/info}}
</div>