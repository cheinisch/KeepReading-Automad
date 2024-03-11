        <footer>
            <div uk-grid>
                <div class="uk-width-1-3@m">
                    <b>@{ sitename }</b>
                    <p>
                        &copy; 2024<br />Diese Seite ist gemacht mit <span uk-icon="heart"></span> Liebe und <span uk-icon="code"></span> Automad
                    </p>
                    <ul>
                        <li><span uk-icon="github"></span></li>
                        <li><span uk-icon="mastodon"></span></li>
                        <li><span uk-icon="instagram"></span></li>
						<li><span uk-icon="threads"></span></li>
                        <li><span uk-icon="xing"></span></li>
                    </ul>
                </div>
                <div class="uk-width-1-3@m">
                </div>
                <div class="uk-width-1-6@m">
                    <!-- Bottom NAV 2-->
                    <ul class="uk-nav uk-nav-default">
                        <@ newPagelist { type: false, excludeHidden: false } @>
                        <@ foreach in pagelist @>
                            <@ if @{ checkboxShowinBottomNav_2 } @>
                                <li><a href="@{ url }">@{ title }</a></li>
                            <@ end @>
                        <@ end @>	
                    </ul>
                </div>
                <div class="uk-width-1-6@m">
                    <!-- Bottom NAV 1 -->
                    <ul class="uk-nav uk-nav-default">
                        <@ newPagelist { type: false, excludeHidden: false } @>
                        <@ foreach in pagelist @>
                            <@ if @{ checkboxShowinBottomNav_1 } @>
                                <li><a href="@{ url }">@{ title }</a></li>
                            <@ end @>
                        <@ end @>	
                    </ul>
                </div>         
            </div>
        </footer>
    </body>
</html>
