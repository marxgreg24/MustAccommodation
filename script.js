// script.js
function toggleHamburgerMenu() {
    const menu = document.getElementById('hamburgerMenu');
    if (menu.style.display === 'block') {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'block';
    }
}
