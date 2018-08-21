import './highlight';

const clickMe = document.querySelector('.test-js');

if (clickMe) {
    clickMe.addEventListener('click', () => {
        clickMe.textContent = 'it works ' + String(Date.now()).slice(-6);
    });
}
