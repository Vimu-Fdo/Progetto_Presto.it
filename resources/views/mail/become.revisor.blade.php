<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div></div>
    <h1>Diventa revisore</h1>
    <h2>Ecco i tuoi dati</h2>
    <p>Nome: {{$user->name}}</p>
    <p>Email: {{$user->email}}</p>
    <p>Per diventare revisore clicca sul link sottostante</p>
    <a href="{{route('become.revisor' , compact('user'))}}">Rendi revisore</a>
    </div>
</body>
</html>



             
  

  
          