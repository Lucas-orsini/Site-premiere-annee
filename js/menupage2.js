var tlmenu = new TimelineMax({paused:true});

tlmenu.to('nav', 0.3, {autoAlpha:1})
.staggerFromTo('nav li', 0.5, {y:100, opacity:0}, {y:0, opacity:1}, 0.1);

$('.burgerIcone').click(function(){
   tlmenu.play(0); 
});

$('.fermeBouton').click(function(){
   tlmenu.reverse(0); 
});