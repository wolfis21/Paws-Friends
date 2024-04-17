<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset ('css/styleMain.css')}}"  type="text/css"/> 
    <title>Paws & Friends</title>
</head>
<body id="ShowcaseMain">
    <nav>
        <div class="container">
            <ul id="MainNavBar">
                <h1><img src="{{ URL::asset ('imagenes/Variaciones logo.png')}}" alt="logo"/></h1>

                <li><a>Inicio</a></li>
                <li><a>Nosotros</a></li>
                <li><a>Servicios</a></li>
                <li><a>Promociones</a></li>
                <li><a id="registro">Registrate</a></li>
                <li><a id="ingreso">Iniciar Sesion</a></li>
            </ul>
        </div>
    </nav>


    <div>
        <a class="btn-main" href="#">Mas Informacion</a>
    </div>
        
</body>
</html>