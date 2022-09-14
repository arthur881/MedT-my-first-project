/*LOADER */
const loader = document.querySelector('.loader');

window.addEventListener('load', function(){
    loader.classList.add('fondu-out');
})

/*MENU STICKY */
var nav = document.querySelector("header");
var scrollValue = 0;

window.addEventListener("scroll", function(){
    var positionY = window.scrollY;
    if (positionY > scrollValue){
        scrollValue = positionY;
        nav.classList.remove('down');
    } else {
        scrollValue = positionY;
        nav.classList.add('down');
    };
});



/*MENU BURGER*/

var burgerIcon = document.querySelector('.menu-burger');
var closingArea = document.querySelector('.close');

burgerIcon.addEventListener('click', function() {
    var modal = document.querySelector('.modal-burger');
    modal.classList.toggle('active');
});
closingArea.addEventListener('click', function() {
    var modal = document.querySelector('.modal-burger');
    modal.classList.toggle('active');
});





