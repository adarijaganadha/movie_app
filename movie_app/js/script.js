// Toggle between light and dark modes based on system preferences or manual toggle
function toggleMode() {
    const currentMode = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
    document.body.classList.toggle('dark-mode');
    document.body.classList.toggle('light-mode');
}

// Open/Close menu for mobile view
function openMenu() {
    const menuContent = document.getElementById('menuContent');
    menuContent.style.display = menuContent.style.display === 'block' ? 'none' : 'block';
}
