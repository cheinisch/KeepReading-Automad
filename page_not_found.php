<?php
http_response_code(404);
?>

<@ elements/header.php @>

    <body>
        <header>
<@ elements/navigation.php @>
        </header>
        <main>
            <content class="page">
                <h1>HTTP 404 Error</h1>
                <h2>File not Found</h2>
                <p>
                    Looks like you'be followed a broken link ir entered a URL that doesn't exist on this site.
                </p>
                <p>
                    <a href="/">Back to our site</a>
                </p>
            </content>
        </main>
<@ elements/footer.php @>
