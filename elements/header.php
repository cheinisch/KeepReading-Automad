<?php
    $langArray = require '/packages/heimfisch/keepreading/lang/lang.en.php';
?>

<!doctype html>
<html class="no-js" lang="de">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <@ Automad/MetaTags {
            ogTitle: @{ metaTitle | stripTags },
            ogType: 'website',
            ogImage: @{ ogImage },
            twitterCard: 'summary_large_image',
            ogDescription: @{ +main | findFirstParagraph | 300 },
            description: @{ +main | findFirstParagraph | 300 }
        } @>

        <title>@{ sitename } // @{ title }</title>

        

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.19.1/dist/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.1/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.1/dist/js/uikit-icons.min.js"></script>

        <link rel="stylesheet" href="/packages/@{ theme }/css/style.css">
        <!---->
    </head>