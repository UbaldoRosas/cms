<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS</title>
    <!-- Material Design Lite -->
    <link rel="stylesheet" href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" />
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo base_url();?>css/estilos.min.css">
</head>
<body>
    <div class="page-wrapper">
        <?php $this->load->view('snippets/aside'); ?>
        <div class="mdc-drawer-app-content">
            <header class="mdc-top-app-bar app-bar" id="app-bar">
                <div class="mdc-top-app-bar__row">
                    <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                        <span class="mdc-top-app-bar__title">Imágenes</span>
                    </section>
                </div>
            </header>
    
            <main class="main-content" id="main-content">
                <div class="mdc-top-app-bar--fixed-adjust">
                    <!-- App Content -->
    
