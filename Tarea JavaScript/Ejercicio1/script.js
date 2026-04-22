const campoA = document.getElementById('a');
const campoB = document.getElementById('b');
const botonCopiar = document.getElementById('copiar');

botonCopiar.addEventListener('click', function () {
	campoB.value = campoA.value;
});
