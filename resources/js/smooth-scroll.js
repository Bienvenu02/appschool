import SmoothScroll from 'smooth-scroll';

var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 600,
    speedAsDuration: true,
    offset: 80, // décalage en px (exemple pour header fixe)
});