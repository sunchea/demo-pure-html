<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Error 404 | <?=$_SERVER['REQUEST_URI'];?> — does not exist, sorry</title>
    <link rel="preload" href="/assets/fonts/lato/lato.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="/assets/css/main.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="/assets/fonts/lato/lato.css">
        <link rel="stylesheet" href="/assets/css/main.css">
    </noscript>
    <link rel="shortcut icon" type="image/png" href="favicon96.png" />
    <link rel="icon" type="image/png" href="icon.png" />
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>

<body>
    <div style="text-align:center;">
        <h1>Error 404</h1>
        <h2>Page "<?=$_SERVER['REQUEST_URI'];?>" does not exist, sorry :(</h2>
    </div>
    <hr>
	<?
	    echo "<pre>";
	    var_dump($_SERVER);
        echo "</pre>";
	?>
	<hr>
</body>

</html>