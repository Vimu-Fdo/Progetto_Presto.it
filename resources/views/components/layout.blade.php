<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    @livewireStyles
    @vite(['resources/css/app.css' , 'resources/js/app.js'])
  </head>
  <body class="bgL">
  {{ $slot }}
  @livewireScripts
  </body>
</html>