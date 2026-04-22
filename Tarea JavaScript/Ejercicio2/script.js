document.addEventListener('DOMContentLoaded', function() {
    
    const botonIr = document.getElementById('botonIr');
    const campoA = document.getElementById('campoA');

    botonIr.addEventListener('click', function() {
        
        const url = campoA.value.trim();


        if (url === '') {
            alert('Error: El campo está vacío. Por favor, introduce una URL.');
            return; 
        }

        if (!url.includes('http://')) {
            alert('Error: La URL debe contener la cadena "http://".');
            return;
        }

        window.location.href = url;
    });
});