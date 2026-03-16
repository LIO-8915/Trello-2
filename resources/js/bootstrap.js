// Importamos Bootstrap JavaScript
import * as bootstrap from 'bootstrap';

// Hacemos bootstrap disponible globalmente
window.bootstrap = bootstrap;

// Pequeña prueba para ver que JS funciona
document.addEventListener('DOMContentLoaded', function() {
    console.log('Bootstrap JS cargado correctamente');
    console.log('Versión de Bootstrap:', bootstrap.Tooltip.VERSION);
});