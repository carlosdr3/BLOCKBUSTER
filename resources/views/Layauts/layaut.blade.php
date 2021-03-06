<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
<header class="bg-primary">

    <span class="text-warning font-weight-bold">Blockboster</span>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><span class="fa fa-search"></span></div>
                </div>
                <input type="text" placeholder="Search">
            </div>
        </li>
        <li class="nav-item"><a href="" class="nav-link text-white">Inicio</a></li>
        <li class="nav-item"><a href="" class="nav-link text-white">Compras</a></li>
        <li class="nav-item"><a href="{{url("peliculas")}}" class="nav-link text-white">Peliculas</a></li>
        <li class="nav-item"><a href="{{url("generos")}}" class="nav-link text-white">Generos</a></li>
        <li class="nav-item"><a href="{{url("sexos")}}" class="nav-link text-white">Sexos</a></li>
        <li class="nav-item"><a href="{{url("stands")}}" class="nav-link text-white">Stands</a></li>
        <li class="nav-item"><a href="{{url("formatos")}}" class="nav-link text-white">Formatos</a></li>
        <li class="nav-item"><a href="{{url("/carlos")}}" class="nav-link text-white">Carlos</a></li>



    </ul>
</header>
<main class="container">
    @yield("content")
</main>
<footer class="bg-primary text-center">
    <span class="text-warning"> Powered by charly</span>
</footer>
</body>
</html>
