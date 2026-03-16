@extends('layouts.app')
@section('titulo', 'Home')

@section('contenido')
<div class="container">
    <div class="row">
       
        <div class="col-3 Not">
           
           
            <h1 class="encabezado">Notificaciones</h1>
            <p class="texto2">Aqui se ven las ultimas notificaciones guardadas.</p>
            <p class="texto2">
                <span class="placeholder col-6"></span>
                <span class="placeholder col-4"></span>
                <span class="placeholder col-7"></span>
                <span class="placeholder col-12"></span>
                <span class="placeholder col-2"></span>
                <span class="placeholder col-6"></span>
            </p>
            
        </div>
        
       
        <div class="col-9">
        
            <div class="row">
            <h1 class="encabezado" style="margin-top: 15px;">Espacios</h1>
            <!--TARJETA-->
                <div class="col-6">  
                    <div class="card tarjeta">
                        <img src="https://i.pinimg.com/736x/c0/9e/74/c09e746dcf4a486c2fe887504c9e0c60.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title titulo">
                                 <span class="placeholder col-6"></span>
                            </h5>
                            <p class="card-text texto2">
                                 <span class="placeholder col-12"></span>
                            </p>
                             <a href="{{ route('tablero') }}" class="btn btn-outline-primary">Entrar</a>
                        </div>
                    </div>
                </div>

                <div class="col-6">  
                    <div class="card tarjeta">
                        <img src="https://i.pinimg.com/736x/c0/9e/74/c09e746dcf4a486c2fe887504c9e0c60.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title titulo">
                                 <span class="placeholder col-6"></span>
                            </h5>
                            <p class="card-text texto2">
                                 <span class="placeholder col-12"></span>
                            </p>
                            <a href="#" class="btn btn-outline-primary">Entrar</a>
                        </div>
                    </div>
                </div>

                <div class="col-6">  
                    <div class="card tarjeta">
                        <img src="https://i.pinimg.com/736x/c0/9e/74/c09e746dcf4a486c2fe887504c9e0c60.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title titulo">
                                 <span class="placeholder col-6"></span>
                            </h5>
                            <p class="card-text texto2">
                                 <span class="placeholder col-12"></span>
                            </p>
                             <a href="#" class="btn btn-outline-primary">Entrar</a>
                        </div>
                    </div>
                </div>

                

        
        </div>
    </div>
    <div class="container-fluid text-end">
    <div class="row">

<button type="button" class="btn-flotante-circular" title="Nuevo Tablero">
    <i class="bi bi-plus-lg"></i>
    <span style="display: none;">Nuevo Tablero</span>  
</button>
</div>

</div>
            
            
        </div>
</div>
@endsection
