<?
    $themeDomain = $_SERVER["SERVER_NAME"];
    $themeClass = 'dark-theme';
    $themeActiveDark = ' active';
    $themeActiveLight = '';
    if ( !empty( $_COOKIE['theme'] ) && $_COOKIE['theme'] == 'dark-theme' ) {
        $themeClass = 'dark-theme';
        $themeActiveDark = ' active';
        $themeActiveLight = '';
    }
    if ( !empty( $_COOKIE['theme'] ) && $_COOKIE['theme'] == 'light-theme' ) {
        $themeClass = 'light-theme';
        $themeActiveDark = '';
        $themeActiveLight = ' active';
    }
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="theme-color" content="#0d6efd">
	<title>Error 404 | <?=$_SERVER['REQUEST_URI'];?> — does not exist, sorry</title>
	<meta name="description" content="Персональная страница, портфолио — Жамков Александр, Web-разработчик, Москва, Краснодар | Pure HTML">
    <link rel="preload" href="/assets/fonts/lato/latoregular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/lato/latomedium.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/lato/latoitalic.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="stylesheet preload prefetch" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" as="style" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/lato/lato.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="/assets/css/main.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="/assets/icons/bootstrap-icons-1.3.0/bootstrap-icons.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/fonts/lato/lato.css">
        <link rel="stylesheet" href="/assets/css/main.css">
        <link rel="stylesheet" href="/assets/icons/bootstrap-icons-1.3.0/bootstrap-icons.css">
    </noscript>
    <link rel="shortcut icon" type="image/png" href="favicon96.png" />
    <link rel="icon" type="image/png" href="icon.png" />
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>

    </style>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MRDX92P');</script>
    <!-- End Google Tag Manager -->
</head>

<body class="<?=$themeClass;?>">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MRDX92P"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="container pt-5">
	    <div class="d-flex flex-column pt-5 text-center">
            <h1>Error 404</h1>
            <div class="_flex-fill mt-5 pt-4 pe-4 pb-4 ps-4 g-bg-lg g-br-8">
                <h2>Page "<?=$_SERVER['REQUEST_URI'];?>" does not exist</h2>
                <h3><a href="https://<?=$themeDomain;?>" class="g-link">Go to main page</a></h3>
            </div>
        </div>
    </div>
</body>

</html>