{{-- resources/views/login.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Trello.2</title>
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <style>
        body {
            background: linear-gradient(135deg, #000000 0%, #0a1536 100%);
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg border-0" style="width: 22rem; background-color: rgb(28, 28, 28);">
            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <i class="bi bi-kanban fs-1 text-primary"></i>
                    <h2 class="mt-2" style="color:  rgb(161, 161, 161);">Trello.2</h2>
                    <p style="color:  rgb(161, 161, 161);">Inicia sesión en tu cuenta</p>
                </div>
                
                <form>
                    <div class="mb-3">
                        <label class="form-label" style="color:  rgb(161, 161, 161);">Usuario</label>
                        <input type="text" class="form-control" placeholder="Nombre de usuario" style="background-color: rgb(21, 21, 21); border-color: transparent; color:  rgb(161, 161, 161);">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label" style="color:  rgb(161, 161, 161);">Contraseña</label>
                        <input type="password" class="form-control" placeholder="••••••••" style="background-color: rgb(21, 21, 21); border-color: transparent; color:  rgb(161, 161, 161);">
                    </div>
                    
                   

                    <button type="submit" class="btn btn-outline-primary w-100 py-2">Iniciar sesion</button>
                </form>
                
                <div class="text-center mt-3">
                    <a href="#" class="text-decoration-none" style="color: rgb(114, 114, 114); ;">¿Olvidaste tu contraseña?</a>
                </div>
                
                <hr class="my-4">
                
                <div class="text-center">
                    <span style="color:  rgb(161, 161, 161);">¿No tienes cuenta?</span>
                    <a href="#" class="text-decoration-none ms-1">Regístrate</a>    
                </div>

                <div class="text-center">
                    <a href="{{ route('home') }}" class="text-decoration-none ms-1">IGNORAR</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>