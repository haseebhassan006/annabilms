

/*Video pOpup*/
// Function to reveal lightbox and adding YouTube autoplay
function revealVideo(div, video_id) {
  var video = document.getElementById(video_id).src;
  document.getElementById(video_id).src = video + "&autoplay=1"; // adding autoplay to the URL
  document.getElementById(div).style.display = "block";
}

// Hiding the lightbox and removing YouTube autoplay
function hideVideo(div, video_id) {
  var video = document.getElementById(video_id).src;
  var cleaned = video.replace("&autoplay=1", ""); // removing autoplay form url
  document.getElementById(video_id).src = cleaned;
  document.getElementById(div).style.display = "none";
}

/*Video pOpup*/
/* FLoatint Navbar */
const icon = document.getElementById("toggler");
const nav = document.getElementById("navbar");
// functions
nav.style.display = "none";
const showNav = (e) => {
  e.target.parentElement.classList.toggle("change-backGround");
  e.target.classList.toggle("clicked");
  //setTimeout ==> because when i display:none for elements not animated so i delay it to be smooth
  e.target.classList.contains("clicked")
    ? ((nav.style.cssText = "dispaly: flex;"),
      setTimeout(() => (nav.style.transform = "translateY(0)"), 300))
    : ((nav.style.transform = "translateY(-100%)"),
      setTimeout(() => (nav.style.display = "none"), 700));
};
//events
icon.addEventListener("click", showNav);
/* FLoatint Navbar */

/*learning Slider*/
jQuery( document ).ready(function($) {
$('#slider1').slick({
dots: true,
arrows: false,
// infinite: true,
// speed: 2000,
slidesToShow: 3,
// loop: true,
slidesToScroll: 1,
autoplay: false,
// autoplaySpeed: 2000,
pauseOnHover: false,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 3,
speed: 1000,
slidesToScroll: 1,
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 2,
speed: 1000,
slidesToScroll: 1
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
speed: 1000,
slidesToScroll: 1
}
}
]
});
});
/*learning Slider*/
/*learning Slider2*/
jQuery( document ).ready(function($) {
$('#slider2').slick({
dots: true,
arrows: false,
// infinite: true,
// speed: 2000,
slidesToShow: 3,
// loop: true,
slidesToScroll: 1,
autoplay: false,
// autoplaySpeed: 2000,
pauseOnHover: false,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 3,
speed: 1000,
slidesToScroll: 1,
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 2,
speed: 1000,
slidesToScroll: 1
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
speed: 1000,
slidesToScroll: 1
}
}
]
});
});
/*learning Slider2*/
/*learning Slider3*/
jQuery( document ).ready(function($) {
$('#slider3').slick({
dots: true,
arrows: false,
// infinite: true,
// speed: 2000,
slidesToShow: 3,
// loop: true,
slidesToScroll: 1,
autoplay: false,
// autoplaySpeed: 2000,
pauseOnHover: false,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 3,
speed: 1000,
slidesToScroll: 1,
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 2,
speed: 1000,
slidesToScroll: 1
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
speed: 1000,
slidesToScroll: 1
}
}
]
});
});
/*learning Slider3*/


