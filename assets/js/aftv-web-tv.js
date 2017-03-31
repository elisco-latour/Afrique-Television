/*
 * 
 * @type Element
 * Custom JS FIle For AFrique Televsion
 */

var player_toogle = document.getElementById("#toggle_player");
var web_tv = document.getElementById("web_tv");
var web_tv_player = document.getElementById("web_tv-player");
function toggle_player() {
    web_tv.classList.toggle("aftv-web_tv--toggle");
    web_tv_player.classList.toggle("aftv-player__toggle");
    web_tv.scrollIntoView({
        behavior: 'smooth'
    });
}

/*function scrollToTop(scrollDuration) {
 var scrollStep = -window.scrollY / (scrollDuration / 15),
 scrollInterval = setInterval(function () {
 if (window.scrollY !== 0) {
 window.scrollBy(0, scrollStep);
 } else
 clearInterval(scrollInterval);
 }, 15);
 }*/