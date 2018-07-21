<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i"
          rel="stylesheet">
    <link rel="icon" href="../images/favicon.png">
    <title>Adset</title>
    <link href="<?= get_stylesheet_uri() ?>" rel="stylesheet">
</head>
<? wp_head(); ?>
<body class="preload">
<main>
    <header class="hdr--desktop">
        <div class="hdr_logo">
            <a href="/">
                <img src="<?=get_template_directory_uri()?>/images/logo.png" alt="">
            </a>
        </div>
        <div class="hdr_items">
            <a class="hdr_link" href="#about">
                About
            </a>
            <a class="hdr_link" href="#features">
                Features
            </a>
            <!--<a class="hdr_link" href="#testimonals ">
                Testimonals
            </a> -->
            <a class="hdr_link" href="#contacts">
                Contacts
            </a>
        </div>
        <div class="hdr_end">
            <div class="btn btn-t" data-open-request>
                Request a demo
            </div>
            <div class="hdr_sign_in">
                <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="21px" height="21px">
                    <path fill-rule="evenodd" stroke-width="1px" stroke="rgb(255, 255, 255)" fill-opacity="0"
                          d="M3.500,3.500 L17.500,3.500 L17.500,17.500 L3.500,17.500 L3.500,3.500 Z"/>
                    <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                          d="M6.500,9.500 L8.500,9.500 L8.500,11.500 L6.500,11.500 L6.500,9.500 Z"/>
                </svg>
                Sign In
            </div>
        </div>
    </header>
    <header class="hdr--mobile">
        <object class="hdr_burger" data="<?=get_template_directory_uri()?>/images/burger.svg" type="image/svg+xml"></object>
        <a href="/">
            <img src="<?=get_template_directory_uri()?>/images/logo.png" alt="">
        </a>
    </header>
    <div class="nav">
        <div class="nav_close"></div>
        <div class="nav_items">
            <a href="#about" class="nav_item">About</a>
            <a href="#features" class="nav_item">Features</a>
            <!--<a href="#testimonals" class="nav_item">Testimonals</a>-->
            <a href="#contacts" class="nav_item">Contacts</a>
            <div class="nav_item">
                <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="21px" height="21px">
                    <path fill-rule="evenodd" stroke-width="1px" stroke="rgb(255, 255, 255)" fill-opacity="0"
                          d="M3.500,3.500 L17.500,3.500 L17.500,17.500 L3.500,17.500 L3.500,3.500 Z"/>
                    <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                          d="M6.500,9.500 L8.500,9.500 L8.500,11.500 L6.500,11.500 L6.500,9.500 Z"/>
                </svg>
                Sign In
            </div>
        </div>
        <div class="btn btn-t" data-open-request>Request a demo</div>
    </div>