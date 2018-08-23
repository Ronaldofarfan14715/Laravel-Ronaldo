<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LISTADO DE USUARIOS</title>
</head>
<body>
    
    <!-- < ?=  ?>       tipo de impresion sin echo --> 
    <h1>{{ $title }}</h1>



        
        <ul>
               @forelse($users as $user)
            
                    <li>{{$user}}</li>
                @empty
                    <li>no hay registros</li>
            
                @endforelse
                    
        </ul>

       

</body>
</html>