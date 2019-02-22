var controls = document.querySelectorAll('.controls');
for(var i=0; i<controls.length; i++){
    controls[i].style.display = 'inline-block';
}

var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,3000);

function nextSlide(){
    goToSlide(currentSlide+1);
}

function previousSlide(){
    goToSlide(currentSlide-1);
}

function goToSlide(n){
    slides[currentSlide].className = 'slide';
    currentSlide = (n+slides.length)%slides.length;
    slides[currentSlide].className = 'slide showing';
}


var playing = true;

function pauseSlideshow(){
    playing = false;
    clearInterval(slideInterval);
}

function playSlideshow() {
    playing = true;
    slideInterval = setInterval(nextSlide,3000);
}

var next = document.getElementById('next');
var previous = document.getElementById('previous');

next.onclick = function(){
    pauseSlideshow();
    nextSlide();
    if (playing){
        pauseSlideshow()
    } else {
        playSlideshow()
    }
};
previous.onclick = function(){
    pauseSlideshow();
    previousSlide();
    if (playing){
        pauseSlideshow()
    } else {
        playSlideshow()
    }

};

