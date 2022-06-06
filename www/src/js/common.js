import LazyLoad from "vanilla-lazyload";

window.addEventListener('DOMContentLoaded', () => {
    window.LazyLoadInstance = new LazyLoad();
    setVh();
});


window.addEventListener('resize', () => {
    setVh();
});


document.querySelector('.to-top').addEventListener('click', () => {
    window.scrollTo(0,0);
});


function setVh() {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
}