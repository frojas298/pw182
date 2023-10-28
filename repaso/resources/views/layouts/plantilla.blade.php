<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield("titulo")</title> 
    @vite(["resources/js/app.js"]) <!-- Sirve para traer de la carpeta resources los estilos de bootstrap-->


</head>
<body>
    @include("partials.navbar") <!-- Include es herencia que permite meter los estilos de bootstrap que estan guardados en partials -->
    @yield("contenido") <!-- Contenedor que le notificas que lo que haya dentro se puede reutilziar en cualquier parte-->
    

</body>

<footer>
    @include("partials.footer")
</footer>
</html>