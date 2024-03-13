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
                                        <h2 class="head-card">@{ title }</h2>
                                        <p class="uk-text-meta uk-margin-remove-top"><@ date.php @></p>
                                        @{ +main | findFirstParagraph | 150 }
                                    </div>
                                </div>
                            </div>
                        </a>              
