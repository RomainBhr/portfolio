<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?= VariablesGlobales::$titre ?></title>
        <base href="<?= VariablesConfig::$url ?>">
        <meta http-equiv="Content-Language" content="fr">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="shortcut icon" type="image/jpeg" href="<?php echo Chemins::IMAGES_LOGO. 'icon.png'; ?>">
        <link rel="apple-touch-icon" href="<?php echo Chemins::IMAGES_LOGO. 'icon.png'; ?>">
        <meta name="description" content="<?= VariablesGlobales::$metaDescription ?>">
        <meta name="author" content="Romain Boehler"/>
        <meta name="copyright" content="Romain Boehler"/>
        <meta name="theme-color" content="#fafafa"/>
        <link rel="manifest" href="<?= VariablesConfig::$url ?>manifest.json">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="<?php echo Chemins::IMAGES_LOGO. 'icon.png'; ?>" />
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

        <link href="<?php echo Chemins::STYLES. 'font.css'; ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo Chemins::STYLES. 'principal.css'; ?>" rel="stylesheet" type="text/css">
        <link media="screen and (max-width: 787px)" href="<?php echo Chemins::STYLES. 'phone.css'; ?>" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!-- <div class="loading" id="loading">
            <p class="Satisfy" style=" font-size: 40px;">Chargement <span class="animawait animawait-1">.</span> <span class="animawait animawait-2">.</span> <span class="animawait animawait-3">.</span></p>
            <p id="texteChargement" style="font-size: 25px;margin-top: 36px;"></p>
        </div> -->