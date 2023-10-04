<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HOME </title>
    @vite(["resources/js/app.js"])

</head>
<body>
    @yield("contenido")
    @include("partials.scrollspy")s
</body>
</html>