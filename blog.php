<@ elements/header.php @>

    <body>
        <header>
<@ elements/navigation.php @>
        </header>
        <main>
        <@ newPagelist { 
            excludeCurrent: true,
            template: @{ templateFilter }, 
            filter: @{ ?filter }, 
            search: @{ ?search },
            sort: 'date desc, :mtime desc',
            limit: @{ itemsPerPage | def(10) },
            page: @{ ?page | def(1) } 
        } @>
            <content class="bloglist">
                <h1>@{ title }</h1>
                <div class="uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
                    <@ foreach in pagelist @>
                        <a class="bloglistcard" href="@{ url }">
                            <div>
                                <div class="uk-card">
                                    <div class="uk-card-media-top">
                                        <img src="images/light.jpg" width="1280" height="720" alt="">
                                    </div>
                                    <div class="card-body">
                                        <h2 class="head-card">@{ title }</h2>
                                        <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                                        @{ textTeaser | Automad/Lightbox | markdown }
                                    </div>
                                </div>
                            </div>
                        </a>                  
                    <@ end @>
                </div>
            </content>
        </main>
        </main>
<@ elements/footer.php @>