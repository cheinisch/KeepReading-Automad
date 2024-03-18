<?php
$langArray = require './packages/heimfisch/keepreading/lang/lang.en.php';
?>
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
                    <@ if @{ +subheadline } @>
                        <span>@{ +subheadline }</span>
                    <@ end @> 
                </div>
                @{ +main }
                @{ text }
                <div class="article-info">
                <@ if @{ author } @>
                <div>
                    <span>Written by: @{ author }</span>
                </div>
                <@ end @>
                <@ if @{ tags } @>
                <div>
                    <span>Posted in: </span> <@ elements/tags.php @>
                </div>
                <@ end @>
                <div>
                    <?php echo $langArray['keeponreading']; ?>
                </div>
            </article>
        </main>
<@ elements/footer.php @>
