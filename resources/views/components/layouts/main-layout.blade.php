@props(['title'])

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Blog Mito | {{ $title }} </title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('partials.navbar._navbar')
    <h1 id="toto">Hello World</h1>
    @include('partials._session')
    {{ $slot }}

    @vite('resources/js/app.js')
</body>

</html>
