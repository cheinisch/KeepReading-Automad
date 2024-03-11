            <nav class="uk-navbar-container uk-navbar-transparent">
                <div>
                    <div uk-navbar>            
                        <div class="uk-navbar-left">
                            <a class="uk-navbar-item uk-logo" href="/" aria-label="Back to Home">@{ sitename }</a>
                        </div>
                        <div class="uk-navbar-right">
                            <ul class="uk-navbar-nav">
                                <li>
                                    <a href="/feed"><span uk-icon="rss"></span></a>
                                </li>
                                <li><a uk-toggle="target: #offcanvas-nav" href="#"><span uk-navbar-toggle-icon></span></a></li>
                            </ul>
                            <div id="offcanvas-nav" uk-offcanvas="mode: slide overlay: true">
                                <div class="uk-offcanvas-bar">
                                    <ul class="uk-nav uk-nav-default">
                                        <li class="uk-nav-header">Menu</li>
                                        <li class="uk-nav-divider"></li>
                                        <@ newPagelist { type: false, excludeHidden: false } @>
                                        <@ foreach in pagelist @>
                                                <@ if @{ :current } @>
                                                    <li class="uk-active"><a href="@{ url }">@{ title }</a></li>
                                                <@ else @>
                                                    <li><a href="@{ url }">@{ title }</a></li>
                                                <@ end @>
                                        <@ end @>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
