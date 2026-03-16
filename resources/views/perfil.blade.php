@extends('layouts.app')
@section('titulo', 'Perfil de Usuario')

@section('contenido')
<div class="d-flex justify-content-center align-items-center min-vh-100 p-4">
    <div class="card perfil-card shadow-lg border-0">
       
        <div class="banner-container">
            <img src="https://i.pinimg.com/736x/fa/0c/af/fa0caf3b454861bf0353a75852efcdfa.jpg" 
                 alt="Banner de perfil" 
                 class="banner-img">
        </div>
        
        <div class="foto-container">
            <img src="https://i.pinimg.com/736x/20/c1/80/20c180815e440cac86e1066ddcc3d72c.jpg" 
                 alt="Foto de perfil" 
                 class="foto-perfil">
        </div>
        
        <div class="card-body text-center">
            <h2 class="nombre-usuario fw-bold mb-1">Nombre</h2>
            <p class="text-muted mb-3">@Usuario</p>
            
            <p class="bio px-4 mb-4">
                  <span class="placeholder col-12"></span>   <span class="placeholder col-6"></span>
            </p>
            
            <div class="d-flex justify-content-center gap-4 mb-3">
                <div>
                    <span class="fw-bold d-block">156</span>
                    <small class="text-muted">Proyectos</small>
                </div>
                <div>
                    <span class="fw-bold d-block">19</span>
                    <small class="text-muted">Seguidores</small>
                </div>
                <div>
                    <span class="fw-bold d-block">89</span>
                    <small class="text-muted">Siguiendo</small>
                </div>
            </div>
            
            <button class="btn btn-primary px-4">
                <i class="bi bi-pencil-square me-2"></i>Editar Perfil
            </button>
        </div>
    </div>
</div>

<style>
    .perfil-card {
        width: 100%;
        max-width: 1200px;
        border-radius: 20px;
        overflow: hidden;
        background: white;
        margin-top: -80px;
    }
    
    .banner-container {
        height: 300px;
        overflow: hidden;
    }
    
    .banner-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .foto-container {
        display: flex;
        justify-content: center;
        margin-top: -50px;
        margin-bottom: 10px;
    }
    
    .foto-perfil {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid white;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    
    .nombre-usuario {
        color: #333;
        font-size: 1.8rem;
    }
    
    .bio {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.5;
    }
</style>
@endsection