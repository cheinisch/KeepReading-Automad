<@ elements/header.php @>

    <body>
        <header>
<@ elements/navigation.php @>
        </header>
        <main>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-1">
                <@ elements/header-image.php @>
                <@ if not @{ :hideThumbnails } and not @{ iconPanel } @>
                    <@~ header-image.php @>
                    <@ if @{ :imageCard } ~@>
                        <div class="uk-vertical-align uk-text-center" style="50% 0 no-repeat; height: 450px;">
                            <img src="@{ :imageCard }" class="teaser-image" width="1280" height="720" alt="">
                            </div>                        
                    <@~ end ~@>
                <@ end @>                    
                </div>
            </div>
            <article>
                <div class="article-header">
               
                    <h1>@{ title }</h1>
                        <span>@{ subheadline }</span>
                </div>
                @{ +main }
                <div class="article-info">
                <div>
                    <span>Written by: Christian Heinisch</span>
                </div>
                <div>
                    <span>Posted in: </span> <@ elements/tags.php @>
                </div>
            </article>
        </main>
<@ elements/footer.php @>