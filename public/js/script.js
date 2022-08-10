// Light Slider 1
var slider = $('#autoWidth').lightSlider({
    controls: false,
    autoWidth: true,
    loop: true,
    auto: true,
    speed: 1000,
    pauseOnHover: true,
    pause: 4000,
    slideMargin: 10,
    enableTouch: true,
    enableDrag: true,
    galleryMargin: 5,
    keyPress: true,
    rtl: false,
    freeMove: true,
    onSliderLoad: function () {
        $('#autoWidth').removeClass('cS-hidden');
    }
});
$('#next').on('click', function () {
    slider.goToNextSlide();
});
$('#prev').on('click', function () {
    slider.goToPrevSlide();
});

// Light Slider 2
var slider = $('#autoWidth2').lightSlider({
    controls: false,
    autoWidth: true,
    loop: true,
    auto: true,
    speed: 1000,
    pauseOnHover: true,
    pause: 2000,
    slideMargin: 10,
    enableTouch: true,
    enableDrag: true,
    galleryMargin: 5,
    keyPress: true,
    rtl: false,
    freeMove: true,
    onSliderLoad: function () {
        $('#autoWidth2').removeClass('cS-hidden');
    }
});
$('#next').on('click', function () {
    slider.goToNextSlide();
});
$('#prev').on('click', function () {
    slider.goToPrevSlide();
});

// Navbar Side
function openNav() {
    document.getElementById("myNav").style.width = "50%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

// Expand Content
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("collapsed");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}