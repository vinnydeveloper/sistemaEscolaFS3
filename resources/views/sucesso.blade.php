<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
    
    
    @foreach($pessoas as $pessoa)
        @if($pessoa['nome'] == "vinicius")
          <li>{{ $pessoa["nome"] }}</li>
        @endif
    @endforeach
    </ul>
    
</body>
</html>