console.log('tout va bien');

    
var tlmenu = new TimelineMax({paused:true});

tlmenu.to('nav', 0.3, {autoAlpha:1})
.staggerFromTo('nav li', 0.5, {y:100, opacity:0}, {y:0, opacity:1}, 0.1);

$('.burgerIcone').click(function(){
   tlmenu.play(0); 
});

$('.fermeBouton').click(function(){
   tlmenu.reverse(0); 
});
// appartition de la page

TweenMax.fromTo('#banniere h2',0.6, {y:80, opacity:0}, {y:0, opacity:1, delay:1});

TweenMax.fromTo('#banniere .enSavoirPlus',0.6, {y:80, opacity:0}, {y:0, opacity:1, delay:1.6, ease:Back.easeOut});

TweenMax.fromTo('#espace h2',0.6, {y:80, opacity:0}, {y:0, opacity:1, delay:2});

TweenMax.fromTo('.slideshow-container',0.6, {y:80, opacity:0}, {y:0, opacity:1, delay:2.4});

TweenMax.fromTo('#troisiemeDiv h2',0.6, {y:80, opacity:0}, {y:0, opacity:1, delay:2.8});

TweenMax.fromTo('#troisiemeDiv img',0.6, {y:80, opacity:0}, {y:0, opacity:1, delay:2.8});

//bouton en savoir plus

jQuery(document).ready(function(){
    $('.enSavoirPlus').on('click', function(){
    $('#description').css('display','inline-block');
    $('.enSavoirPlus').css('display','none');
    TweenMax.fromTo('#description',0.6, {y:0, opacity:0}, {y:80, opacity:1,});
    });
    

})
// deplacement équipage

$('.responsive').hover(deplacement);


function deplacement(){
    TweenMax.fromTo('.responsive',  1,{y:20},{y:60}, 3);
}
                    
                    
//logo one piece

$(".logo").hover(function(){
  $(".logo").fadeToggle();
});

//slider

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
