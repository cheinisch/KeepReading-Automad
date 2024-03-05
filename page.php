<@ elements/header.php @>

    <body>
        <header>
<@ elements/navigation.php @>
        </header>
        <main>
            <content class="page">
                <h1>@{ title }</h1>
                @{ +main }
            </content>
        </main>
<@ elements/footer.php @>