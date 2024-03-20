<a class="bloglistcard" href="@{ url }">
    <div>
        <div class="uk-card">
            <div class="uk-card-media-top">
                <@ header-image.php @>
                <@ if not @{ :hideThumbnails } and not @{ iconPanel } @>
                    <@~ header-image.php @>
                    <@ if @{ :imageCard } ~@>
                <img src="@{ :imageCard }" class="teaser-image" width="1280" height="720" alt="">
                    <@ else @>
                    <img src="/packages/@{ theme }/img/dummy.png" class="teaser-image" width="1280" height="720" alt="">
                    <@~ end ~@>
                <@ end @>
            </div>
            <div class="card-body">
                <h4 class="prev-next-title">@{ title }</h4>
                <span class="prev-next-date">2023-02-12</span>
            </div>
        </div>
    </div>
</a>  