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
	<title>Жамков Александр | Web-разработчик — Москва, Краснодар</title>
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
	<div class="container mt-5">
	    <div class="row">
            <div class="col-3 col-md-2 col-lg-1">
	            <img src="/assets/img/webp/512.webp" class="img-fluid" alt="Жамков Александр">
            </div>
	        <div class="col-9 col-md-7 col-lg-9 pt-0 align-self-center">
        	    <div class="d-flex flex-lg-row flex-column justify-content-start _align-items-end">
                    <div class="g-mr-10--lg">
                    	<h1 class="display-6">Жамков&nbsp;Александр</h1>
                    </div>
                    <div class="g-ml-10--lg align-self-lg-end">
                    	<h2><span class="text-muted g-font-size-1_3">Web-разработчик</span></h2>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block col-0 col-md-3 col-lg-2 pt-0 align-self-center text-end">
                <div class="btn-group" role="group" aria-label="Dark mode is good">
                    <a href="#?" class="btn btn-primary btn-toggle-dark<?=$themeActiveDark;?>">Dark</a>
                    <a href="#?" class="btn btn-primary btn-toggle-light<?=$themeActiveLight;?>">Light</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-3">
	    <div class="row">
	        <div class="col">
                <hr>
            </div>
        </div>
    </div>
    
    <div class="container">
	    <div class="d-flex flex-lg-row flex-column align-items-stretch">
	        <div class="flex-fill g-mr-10--lg mt-3 pt-4 pe-3 pb-3 ps-4 g-bg-lg g-br-8">
            	<h3>Языки</h3>
            	<ul class="g-list-style-type-none g-pl-0">
            		<li>PHP7&nbsp;&nbsp;<small><i class="bi bi-info-square-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="Эта страница работает на PHP8"></i>&nbsp;</small></li>
            		<li>HTML5&nbsp;&nbsp;<small><i class="bi bi-info-square-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="Эта страница сверстана на чистом HTML"></i>&nbsp;</small></li>
            		<li>CSS3&nbsp;&nbsp;<small><i class="bi bi-info-square-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="Используется отложенная загрузка некритичного CSS с целью оптимизации"></i>&nbsp;</small></li>
            	</ul>
            </div>
            <div class="flex-fill g-mx-10--lg mt-3 pt-4 pe-3 pb-3 ps-4 g-bg-lg g-br-8">
                <h3>CMS, WAF</h3>
            	<ul class="g-list-style-type-none g-pl-0">
            		<li>1С-Битрикс&nbsp;&nbsp;<small><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i> — <a href="#?" class="g-link" title="Скоро...">стр. проекта</a></small></li>
            		<li>WordPress&nbsp;&nbsp;<small><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i> — <a href="#?" class="g-link" title="Скоро...">стр. проекта</a></small></li>
            		<li>Laravel&nbsp;&nbsp;<small><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></small></li>
            		<li>Vue&nbsp;&nbsp;<small><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></small></li>
            	</ul>
            </div>
            <div class="flex-fill g-ml-10--lg mt-3 pt-4 pe-3 pb-3 ps-4 g-bg-lg g-br-8">
            	<h3>Навыки</h3>
            	<ul class="g-list-style-type-none g-pl-0">
            		<li>Bootstrap, верстка, Figma, Photoshop&nbsp;&nbsp;<small><i class="bi bi-info-square-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="Используется UI фреймворк Bootstrap v5.0.0-beta1"></i>  — <a href="#?" class="g-link" title="Скоро...">макет на Figma</a></small></li>
            		<li>Git, Gulp, Composer&nbsp;&nbsp;<small><i class="bi bi-info-square-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="Репозиторий проекта на GitHub"></i> — <a href="https://github.com/sunchea/demo-pure-html" class="g-link" title="Открыть в новом окне" rel="noreferrer" target="_blank">репо на GitHub</a></small></li>
                    <li>macOS, Linux, BSD&nbsp;&nbsp;<small><i class="bi bi-info-square-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="Работа с хостингом ведется по SSH"></i>&nbsp;</small></li>
                	<li>SEO, техническое SEO, реклама</li>
            	</ul>
            </div>
        </div>
    </div>
    
    <div class="container mt-3">
	    <div class="row">
	        <div class="col">
                <hr>
            </div>
        </div>
    </div>
    
    <div class="container mb-2">
        <div class="row align-items-end mt-3">
	        <div class="col-md-auto">
            	<h3>Ссылки</h3>
            </div>
            <div class="col-md-auto">
            	<h4><small class="text-muted">Аудит, валидация, перформанс страницы</small></h4>
            </div>
        </div>
        <div class="row mt-3">
	        <div class="col">
            	<ul>
                    <li><small>PageSpeed Insights — <a href="https://developers.google.com/speed/pagespeed/insights/?url=https%3A%2F%2F<?=$_SERVER["SERVER_NAME"];?>%2F" class="g-link" title="Открыть в новом окне" rel="noreferrer" target="_blank">результат</a></small></li>
                    <li><small>GTmetrix performance — <a href="https://gtmetrix.com/reports/ni-ki-ta.online/65uGMhBp/" class="g-link" title="Открыть в новом окне" rel="noreferrer" target="_blank">результат</a></small></li>
            		<li><small>W3C Markup Validation Service — <a href="https://validator.w3.org/nu/?doc=https%3A%2F%2F<?=$_SERVER["SERVER_NAME"];?>%2F" class="g-link" title="Открыть в новом окне" rel="noreferrer" target="_blank">результат</a></small></li>
            		<li><small>W3C CSS Validation Service — <a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2F<?=$_SERVER["SERVER_NAME"];?>%2F&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=ru" class="g-link" title="Открыть в новом окне" rel="noreferrer" target="_blank">результат</a></small></li>
            		<li><small>SEO аудит, сервис pr-cy.ru — <a href="https://a.pr-cy.ru/<?=$_SERVER["SERVER_NAME"];?>" class="g-link" title="Открыть в новом окне" rel="noreferrer" target="_blank">результат</a></small></li>
            	</ul>
            </div>
        </div>
    </div>

    <div class="container">
	    <div class="row">
	        <div class="col">
                <hr>
            </div>
        </div>
    </div>
    
    <div class="container mt-3 mb-4">
	    <div class="d-flex flex-lg-row flex-column justify-content-between">
	        <div class="_flex-fill">
            	<p><small>This page is on <mark>Pure HTML</mark> © Жамков Александр, <?=date("Y");?> г. Все&nbsp;права&nbsp;защищены.</small></p>
            </div>
	        <div class="_flex-fill">
	            <p><small><a href="mailto:sunchea.qomo@gmail.com?subject=FROM_site_<?=$_SERVER['SERVER_NAME'];?>" class="g-link">sunchea.qomo@gmail.com</a></small></p>
            </div>
        </div>
    </div>
    
	<script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script defer src="/assets/js/main.js" crossorigin="anonymous"></script>
</body>
	<? /*
	    echo "<pre>";
	    var_dump($_SERVER);
        echo "</pre>";
	*/ ?>
</html>