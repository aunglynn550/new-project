const $target = document.querySelector('.box');

document.querySelector('#edge').addEventListener('change', (e) => {
	const edge = e.target.value;
	document.querySelectorAll('output[for="edge"]').forEach((el) => el.innerHTML = edge);
	$target.setAttribute('data-edge', edge);
});

document.querySelector('#threshold').addEventListener('input', (e) => {
	const threshold = parseFloat(e.target.value).toFixed(2);
	document.querySelectorAll('output[for="threshold"]').forEach((el) => el.innerHTML = threshold);
	$target.style.setProperty('--threshold', threshold);
});