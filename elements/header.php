<@~ header-image.php @>
<?php
$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

$escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
?>
<!doctype html>
<html class="no-js" lang="de">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <@ if @{ tags } @>
        <meta name="keywords" content="<@ foreach in tags 	@><@ if @{ :i } > 1 @>, @{ :tag }<@ else @>@{ :tag }<@ end @><@ end @>">
        <@ end @>
        <!-- Open Graph -->
        <meta property="og:title" content="@{ title }" />
        <meta property="og:type" content="video.movie" />
        <meta property="og:url" content="<?php echo 'https://'.$escaped_url; ?>" />
        <@ if @{ :imageCard } ~@>  
        <meta property="og:image" content="<?php echo 'https://'.$_SERVER['HTTP_HOST']; ?>@{ :imageCard }" />
        <@~ end ~@>

        <!-- Title -->
        <title>@{ sitename } // @{ title }</title>
     
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.19.1/dist/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.1/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.1/dist/js/uikit-icons.min.js"></script>

        <link rel="stylesheet" href="/packages/@{ theme }/css/style.css">
        <!---->
    </head>