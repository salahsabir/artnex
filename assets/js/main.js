const responsive_menu = document.querySelector('.responsive-menu')
const navebar_menu = document.querySelector('.navbar-container')
//menu toggle
function hamburgericon(x) {
    x.classList.toggle("menu-on");
    responsive_menu.classList.toggle("menu-active")
  }
//scroll event
window.onscroll = function() {myFunction()};

function myFunction() {
    if (window.innerWidth > 768) {
        if (document.documentElement.scrollTop > 50) {
            navebar_menu.classList.add("navbar-top-connect")
        } else {
            navebar_menu.classList.remove("navbar-top-connect")
        }
    }
}