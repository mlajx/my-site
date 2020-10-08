const coldButton = document.getElementById('cold');
const hotButton = document.getElementById('hot');
const cyberpunkButton = document.getElementById('cyberpunk');
const body = document.body;

const theme = localStorage.getItem('dev-marcelo-theme');

if(theme) {
    body.classList.replace('cold', theme);
}

coldButton.onclick = () => {
    body.classList.remove('cyberpunk', 'hot');
    body.classList.add('cold');
    localStorage.setItem('dev-marcelo-theme', 'cold');
};

hotButton.onclick = () => {
    body.classList.remove('cyberpunk', 'cold');
    body.classList.add('hot');
    localStorage.setItem('dev-marcelo-theme', 'hot');
};

cyberpunkButton.onclick = () => {
    body.classList.remove('hot', 'cold');
    body.classList.add('cyberpunk');
    localStorage.setItem('dev-marcelo-theme', 'cyberpunk');
};
