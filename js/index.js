const hamburgerButton = document.querySelector('.navbar-toggler');
const navigationMenu = document.querySelector('#navbarNav');

hamburgerButton.addEventListener('click', () => {
  navigationMenu.classList.toggle('show');
});