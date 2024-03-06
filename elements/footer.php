        <footer>
            <div uk-grid>
                <div class="uk-width-1-3@m">
                    <b>Copyright</b>
                    <p>
                        Hier kommt ein Text im Footer rein
                    </p>
                    <ul>
                        <li><span uk-icon="github"></span></li>
                        <li><span uk-icon="mastodon"></span></li>
                        <li><span uk-icon="instagram"></span></li>
                        <li>Threads</li>
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