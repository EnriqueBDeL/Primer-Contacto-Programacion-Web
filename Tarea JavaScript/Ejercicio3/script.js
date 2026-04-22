let miVentana;

document.addEventListener('DOMContentLoaded', function() {

    document.getElementById('btnAbrir').addEventListener('click', function() {
    
        miVentana = window.open('', '', 'width=300,height=300,left=100,top=100');
    });

    document.getElementById('btnCerrar').addEventListener('click', function() {
        if (miVentana && !miVentana.closed) {
            miVentana.close();
        }
    });

    document.getElementById('btnAumentar').addEventListener('click', function() {
        if (miVentana && !miVentana.closed) {
            miVentana.resizeBy(50, 50); 
        }
    });

    document.getElementById('btnReducir').addEventListener('click', function() {
        if (miVentana && !miVentana.closed) {
            miVentana.resizeBy(-50, -50); 
        }
    });

    document.getElementById('btnDerecha').addEventListener('click', function() {
        if (miVentana && !miVentana.closed) {
            miVentana.moveBy(50, 0); 
        }
    });

    document.getElementById('btnIzquierda').addEventListener('click', function() {
        if (miVentana && !miVentana.closed) {
            miVentana.moveBy(-50, 0); 
        }
    });

    document.getElementById('btnDerechaSuave').addEventListener('click', function() {
        if (miVentana && !miVentana.closed) {
            let pasos = 0;
            const intervalo = setInterval(function() {
                miVentana.moveBy(5, 0); 
                pasos++;
                
                if (pasos >= 30) {
                    clearInterval(intervalo);
                }
            }, 30); 
        }
    });
});