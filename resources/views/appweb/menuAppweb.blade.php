<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/general.css">
    <title>yodonante</title>
</head>
<body>
    <header id="main-header" data-height-onload="66">
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#">QUIERO SER DONANTE VOLUNTARIO</a></li>
            <li><a href="#">QUIERO SER EMBAJADOR DE MARCA</a></li>
        </ul>
        <nav>
            <div class="nav-wrapper white">
                <div class="container">
                    <img src="img/yodonante_logo.png" height="50">
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="blue-grey-text text-darken-2" href="/">INICIO</a></li>
                        <li><a class="dropdown-trigger blue-grey-text text-darken-2" href="#" data-target="dropdown1">¿CÓMO SUMAR?<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="blue-grey-text text-darken-2" href="#">NECESITO DONANTES</a></li>
                        <li><a class="blue-grey-text text-darken-2" href="#">REQUISITOS</a></li>
                        <li><a class="blue-grey-text text-darken-2" href="#">BENEFICIOS</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <ul class="sidenav" id="mobile-demo">
            <li><a href="#">INICIO</a></li>
            <li><a href="#">¿CÓMO SUMAR?</a></li>
            <li><a href="#">NECESITO DONANTES</a></li>
            <li><a href="#">REQUISITOS</a></li>
            <li><a href="#">BENEFICIOS</a></li>   
        </ul>
    </header>
    
    @yield('pagprincipal')
    @yield('casos')

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="js/general.js"></script>
    
</body>
</html>