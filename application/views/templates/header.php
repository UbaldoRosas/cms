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
        <aside class="mdc-drawer">
            <div class="mdc-drawer__header">
                <h3 class="mdc-drawer__title">CMS</h3>
                <h6 class="mdc-drawer__subtitle">your@email.io</h6>
            </div>
            <div class="mdc-drawer__content">
                <nav class="mdc-list">
                    <h6 class="mdc-list-group__subheader">Recursos</h6>
                    <a class="mdc-list-item mdc-list-item--activated" href="#" aria-selected="true">
                        <i class="material-icons mdc-list-item__graphic" aria-hidden="true">image</i>
                        <span class="mdc-list-item__text">Imágenes</span>
                    </a>
                    <a class="mdc-list-item" href="#">
                        <i class="material-icons mdc-list-item__graphic" aria-hidden="true">videocam</i>
                        <span class="mdc-list-item__text">Videos</span>
                    </a>
                    <a class="mdc-list-item" href="#">
                        <i class="material-icons mdc-list-item__graphic" aria-hidden="true">class</i>
                        <span class="mdc-list-item__text">Cursos</span>
                    </a>
                    <a class="mdc-list-item" href="#">
                        <i class="material-icons mdc-list-item__graphic" aria-hidden="true">font_download</i>
                        <span class="mdc-list-item__text">Fuentes</span>
                    </a>
    
                    <hr class="mdc-list-divider">
                    <!-- <h6 class="mdc-list-group__subheader">Labels</h6> -->
                    <a class="mdc-list-item" href="#">
                        <i class="material-icons mdc-list-item__graphic" aria-hidden="true">group</i>
                        <span class="mdc-list-item__text">Usuarios</span>
                    </a>
                    <a class="mdc-list-item" href="#">
                        <i class="material-icons logout mdc-list-item__graphic" aria-hidden="true">exit_to_app</i>
                        <span class="mdc-list-item__text">Cerrar sesión</span>
                    </a>
                </nav>
            </div>
        </aside>
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
    
