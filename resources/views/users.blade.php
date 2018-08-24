

@extends('layout')
    <!-- < ?=  ?>       tipo de impresion sin echo --> 
    
    

    @section('contenido')


    <div class="row mt-3">

        <div class="col-8">

                <h1>{{ $title }}</h1>
        
                <ul>
                       @forelse($users as $user)
                    
                            <li>{{$user}}</li>
                        @empty
                            <li>no hay registros</li>
                    
                        @endforelse
                            
                </ul>

        </div>

        <div class="col-4">

            <p>barra letaral </p>
        </div>

    </div>


   
    @endsection

       
