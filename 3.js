
const toggleButton = document.querySelector('.menu-toggle');
const dropdownMenu = document.querySelector('.dropdown-menu');

toggleButton.addEventListener('click', () => {
    dropdownMenu.classList.toggle('active');
});



window.onload = function() {
    console.log("Бос ақ бет жүктелді");
};
