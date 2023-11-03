
const button = document.getElementById('showMoreButton');
const content = document.getElementById('additionalFilter');

button.addEventListener('click', () => {
    if (content.hidden) {
        content.hidden = false;
        setTimeout(() => {
            content.classList.add('is-collapsed');
        }, 100);
    } else {
        content.classList.remove('is-collapsed');
        // content.hidden=true;
        setTimeout(() => {
            content.hidden = true;
        }, 1000);
    }
});





