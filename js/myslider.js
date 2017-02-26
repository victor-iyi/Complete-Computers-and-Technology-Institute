currSlide = 1;
nextSlide = 2;

$(document).ready(function(){
	$('.slider > a >img#'+currSlide).fadeIn();
	startSlider();
});

function startSlider(){

	loop = setInterval(function(){
		noOfImg = $('.slider > a > img').size();

		if(nextSlide > noOfImg){
			currSlide = 1;
			nextSlide = 1;
		}

		$('.slider > a > img').fadeOut();
		$('.slider > a > img#'+nextSlide).fadeIn();
		currSlide = nextSlide;
		nextSlide += 1;
	}, 4000);

}



function prev(){
	newSlide = currSlide - 1;
	slide(newSlide);
}


function next(){
	newSlide = currSlide + 1;
	slide(newSlide);
}


function slide(id){
	stopSlider();

	if(id > noOfImg){
		id = 1;
	}else if(id < 1){
		id = noOfImg;
	}

	$('.slider > a > img').fadeOut();
	$('.slider > a > img#'+id).fadeIn();

	currSlide = id;
	nextSlide = id + 1;

	startSlider();
}


function stopSlider(){
	window.clearInterval(loop);
}


$('.slider > a > img').hover(function(){ stopSlider(); }, function(){ startSlider(); });