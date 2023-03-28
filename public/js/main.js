let list = document.querySelector('ul');
function menu(e) {
    e.name=== 'menu' ? (e.name = "close", list.classList.add('too-[80px]'), list.classList.add('opacity-100')) :
                     (e.name = "menu", list.classList.remove('too-[80px]'), list.classList.remove('opacity-100') )
}
var counter = 1;
setInterval(function(){
document.getElementById('radio' + counter).checked = true;
counter++;
if(counter > 3 ) {
    counter = 1;
}
}, 5000);

var element = document.getElementById("text");
element.classList.add("active");



$('#gallery').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 8000,
    pauseOnHover: false,
    cssEase: 'linear'
  });
