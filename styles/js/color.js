$(document).ready(function(){
	animation();	
});
function animation(){
	$('.error img').animate({
		'hieght': '24%',
	   	'width': '24%',
	   	'opacity': '0.1',
	  	'left': '-2%',
	  	'top': '-2%'
	  }, 3000)
   	.animate({
        'hieght': '20%',
	   	'width': '20%',
	   	'opacity': '1',
	  	'left': '0',
	  	'top': '0'
        }, 3000, animation);	
}