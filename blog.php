<@ elements/header.php @>

    <body>
        <header>
<@ elements/navigation.php @>
        </header>
        <main>
        <# Paglist config #>
				<@~ newPagelist { 
					type: 'children', 
					context: @{ urlContextForPagelist },
					excludeCurrent: true,
					filter: @{ ?filter },
					match: '{"url": "#@{ filterPagelistByUrl }#"}',
					sort: @{ ?sort | def (@{ sortPagelist }) | def('date desc') },
					limit: @{ itemsPerPage | def(12) },
					page: @{ ?page | def(1) }
				} ~@>
				<@ if @{ checkboxShowAllPagesInPagelist } @>
					<@~ pagelist { type: false } ~@>
				<@ end @>
				<# Search results config #>
				<@~ if @{ ?search } ~@>
					<@ pagelist { 
						type: false,
						match: false, 
						search: @{ ?search }
					} @>
				<@~ end ~@>
            <content class="bloglist">
                <h1>@{ title }</h1>
				<@ if @{ ?filter } @>
					<h2>Filter: @{ ?filter } <a href="@{ url }" uk-icon="icon: close; ratio: 1.5"></a></h2>
				<@ end @>				
                <div class="uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
                    <@ foreach in pagelist @>
                    <@ elements/bloglist-item.php @>    
                    <@ end @>
                </div>
            </content>
        </main>
<@ elements/footer.php @>