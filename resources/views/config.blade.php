@extends('layouts.app')
@section('titulo', 'Configuración')

@section('contenido')
<div class="container">
    <h1>Configuración del sitio</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($configuraciones->isEmpty())
        <div class="alert alert-info">No hay configuraciones disponibles.</div>
    @else
        <form method="POST" action="{{ route('configuraciones.update') }}">
            @csrf
            @method('PUT')

            @foreach($configuraciones as $config)
                <div class="form-group mb-3">
                    <label for="config_{{ $config->clave }}">
                        {{ $config->descripcion ?: $config->clave }}
                    </label>

                    @if($config->tipo === 'boolean')
                        <select name="config[{{ $config->clave }}]" id="config_{{ $config->clave }}" class="form-control">
                            <option value="1" {{ $config->valor == '1' ? 'selected' : '' }}>Sí</option>
                            <option value="0" {{ $config->valor == '0' ? 'selected' : '' }}>No</option>
                        </select>

                    @elseif($config->tipo === 'number')
                        <input type="number"
                               name="config[{{ $config->clave }}]"
                               id="config_{{ $config->clave }}"
                               value="{{ $config->valor }}"
                               class="form-control">

                    @else
                        <input type="text"
                               name="config[{{ $config->clave }}]"
                               id="config_{{ $config->clave }}"
                               value="{{ $config->valor }}"
                               class="form-control"
                               placeholder="{{ $config->descripcion }}">
                    @endif
                </div>
            @endforeach

            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
    @endif
</div>
@endsection

@push('styles')
    <!-- Estilos adicionales SOLO para esta página -->
@endpush

@push('scripts')
    
@endpush