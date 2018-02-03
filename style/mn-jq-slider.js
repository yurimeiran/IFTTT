
var globalTimeout = null;
var slideIndex = 0;
var timer = 0
function makeSlider(item){
    var itm = $(item);
    
    timer = itm.data("timer");
    var slides = itm.children(".mn-jq-slide");

    slides.each(function(i,e){
        $(e).addClass("slide-"+i);
        var img = $(e).data("img");     
        var copy = $(e).data("copy");
        $(e).css("background-image","url("+img+")");
        $(e).append("<div class='copy'>"+copy+"</div>")
    });

    for(var i = 0; i<slides.length; i++){
        $(".mn-jq-dots").append("<div class='dot dot-"+i+"' onclick='setSlide("+i+");'></div>");
    }  

    $(".mn-jq-prev").on("click", function(){
        prevSlide();
    });
    $(".mn-jq-next").on("click", function(){
        nextSlide();
    });

    $(".mn-jq-dots").css("margin-left",itm.width()/2-slides.length*9);

    nextSlide();
    globalTimeout = setTimeout(nextSlide,timer);
}

function nextSlide() {
    clearTimeout(globalTimeout);
    if ($(".mn-jq-slide").length-1 < slideIndex+1)
        slideIndex = -1;
    showSlides(slideIndex += 1);
    globalTimeout = setTimeout(nextSlide,timer);
}

function prevSlide() {
    if (0 > slideIndex-1)
        slideIndex = $(".mn-jq-slide").length;
    showSlides(slideIndex -= 1);
}

function setSlide(n) {
    showSlides(n);
}

function showSlides(n) {
    var i;
    var slides = $(".mn-jq-slide").removeClass("visible");
    var dots = $(".dot").removeClass("selected");

    $(".dot.dot-"+n).addClass("selected");
    $(".mn-jq-slide.slide-"+n).addClass("visible");
    
}