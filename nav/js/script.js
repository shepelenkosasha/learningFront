menu.onclick = () => {

	let x = document.getElementById('myTopnav');

	x.className === 'topnav' ? x.className += ' responsive' : x.className = 'topnav';
}