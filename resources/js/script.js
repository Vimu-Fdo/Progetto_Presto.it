// Navbar
let myNavbar = document.querySelector('#myNavbar');
let navLinks = document.querySelectorAll('.nav-link');
let navbarBrand = document.querySelector('.navbar-brand');
let icon = document.querySelectorAll('.icon');
let logo = document.querySelector('.logo');

window.addEventListener('scroll' , () => {
    if (window.scrollY > 0) {
        myNavbar.style.backgroundColor = "#1C2331";
        logo.src = "/Media/logoWhite.png"
        myNavbar.classList.add('shadow')  
        icon.forEach((icon) => {
            icon.style.color = "#f0f0f0"
        })
        navLinks.forEach((link) => {
            link.style.color = "#f0f0f0"
        })
        
        
    } else {
        myNavbar.style.backgroundColor = "#ffffff";
        logo.src = "/Media/logoBlack.png"
        myNavbar.classList.remove('shadow')
        icon.forEach((icon) => {
            icon.style.color = "#000000"
        })
        navLinks.forEach((link) => {
            link.style.color = "#000000"
            link.style.marginRight = '0px'
        })
    }
})
// End Navbar
  