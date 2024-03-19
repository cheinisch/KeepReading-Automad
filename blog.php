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
						search: @{ ?search },
						limit: @{ itemsPerPage | def(9) },
						page: @{ ?page | def(1) } 
					} @>
				<@~ end ~@>
            <content class="bloglist">
                <h1>@{ title }</h1>
				<@ if @{ ?filter } @>
					<h2>Filter: @{ ?filter } <a href="@{ url }" uk-icon="icon: close; ratio: 1.5"></a></h2>					
				<@ end @>
				<div class="blogtext">
				@{ +main }
                @{ text }			
				</div>
                <div class="uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
                    <@ foreach in pagelist @>
                    <@ elements/bloglist-item.php @>    
                    <@ end @>
                </div>
				<div class="">
				<@ set { :page: @{ ?page | def (1) } } @>
		<@ if @{ :page } > 1 @>
			<a href="?<@ queryStringMerge { page: @{ :page | -1 } } @>">&lt;</a>
		<@ end @>
		<@ if @{ :paginationCount } > 1 @>
			<@ for @{ :page | -3 } to @{ :page | +3 } @>
				<@ if @{ :i } > 0 and @{ :i } <= @{ :paginationCount } @>
					<@ if @{ :i } = @{ :page } @>
						@{ :i }
					<@ else @>
						<a href="?<@ queryStringMerge { page: @{ :i } } @>">@{ :i }</a>
					<@ end @>
				<@ end @>
			<@ end @>
		<@ end @>
		<@ if @{ :page } < @{ :paginationCount } @>
			<a href="?<@ queryStringMerge { page: @{ :page | +1 } } @>">&gt;</a>
		<@ end @>
				</div>
            </content>
        </main>
<@ elements/footer.php @>