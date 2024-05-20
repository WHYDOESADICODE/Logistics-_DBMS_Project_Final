const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");

menuBtn.addEventListener('click', () => {
    const isOpen = sideMenu.classList.contains('active');
    if (isOpen) {
        sideMenu.classList.remove('active');
        menuBtn.classList.remove('close');
    } else {
        sideMenu.classList.add('active');
        menuBtn.classList.add('close');
    }
});


