

@extends('layout')
    <!-- < ?=  ?>       tipo de impresion sin echo --> 
    
    
    

    @section('contenido')
             <h1>{{ $title }}</h1>
        
                <ul>
                       @forelse($users as $user)
                    
                            <li>{{$user->name}}</li>
                        @empty
                            <li>no hay registros</li>
                    
                        @endforelse
                            
                </ul>

   
    @endsection

    

       
