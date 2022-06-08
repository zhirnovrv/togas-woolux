import ScrollMagic from "scrollmagic";
import {gsap, Linear, TweenLite} from "gsap";
import {ScrollMagicPluginGsap} from "scrollmagic-plugin-gsap";

ScrollMagicPluginGsap(ScrollMagic, gsap);
TweenLite.defaultEase = Linear.easeNone;

let controller,
    coverTextHideScene,
    desertHideScene,
    desertParalaxScene,
    coverHideScene,
    desertTextParalaxScene,
    desertTextOpacityScene,
    coverHideTransScene,
    TwoColBlock_1,
    TwoColBlock_2,
    TwoColBlock_2_Pic1,
    TwoColBlock_2_Pic2,
    TwoColBlock_3,
    TwoColBlock_4,
    TwoColBlock_5,
    TwoColBlock_6;

window.addEventListener('DOMContentLoaded', () => {
    controller = new ScrollMagic.Controller();
    initCoverAnimation();
    updateCoverAnimation();
});
window.addEventListener('orientationchange', () => {
    window.scrollTo(0, 0);
    updateCoverAnimation();
});
window.addEventListener('resize', () => {
    updateCoverAnimation();
});


function updateCoverAnimation() {
    if (window.innerWidth >= 768) {

        document.querySelector('.desert__infinite-majesty').style.transform = 'translate(0, 130vh)';

        coverTextHideScene.enabled(true).refresh();
        coverHideScene.enabled(true).refresh();
        coverHideTransScene.enabled(true).refresh();
        desertHideScene.enabled(true).refresh();
        desertParalaxScene.enabled(true).refresh();
        desertTextParalaxScene.enabled(true).refresh();
        desertTextOpacityScene.enabled(true).refresh();

    } else {


        document.querySelector('.desert__infinite-majesty').style.transform = '';
        document.querySelector('.desert__infinite-majesty').opacity = '1';
        document.querySelector('.cover__body').style.opacity = '1';
        document.querySelector('.cover-bg').style.transform = '';
        document.querySelector('.cover-bg').style.opacity = '1';
        document.querySelector('.desert-bg').style.transform = '';
        document.querySelector('.desert-bg').style.opacity = '1';

        coverTextHideScene.enabled(false).refresh();
        coverHideScene.enabled(false).refresh();
        coverHideTransScene.enabled(false).refresh();
        desertHideScene.enabled(false).refresh();
        desertParalaxScene.enabled(false).refresh();
        desertTextParalaxScene.enabled(false).refresh();
        desertTextOpacityScene.enabled(false).refresh();
    }
    if (window.innerWidth >= 1024) {


        document.querySelector('#two-col-block-1-text').style.transform = 'translate(0, 0)';
        document.querySelector('#two-col-block-2-text').style.transform = 'translate(0, 10vh)';
        document.querySelector('#two-col-block-2-pic-1').style.transform = 'translate(-15px, 25vh)';
        document.querySelector('#two-col-block-2-pic-2').style.transform = 'translate(-25px, 35vh)';
        document.querySelector('#two-col-block-3-text').style.transform = 'translate(0, 0)';
        document.querySelector('#two-col-block-4-text').style.transform = 'translate(0, 0)';
        document.querySelector('#two-col-block-5-text').style.transform = 'translate(0, 0)';
        document.querySelector('#two-col-block-6-text').style.transform = 'translate(0, 0)';


        TwoColBlock_1.enabled(true).refresh();
        TwoColBlock_2.enabled(true).refresh();
        TwoColBlock_2_Pic1.enabled(true).refresh();
        TwoColBlock_2_Pic2.enabled(true).refresh();
        TwoColBlock_3.enabled(true).refresh();
        TwoColBlock_4.enabled(true).refresh();
        TwoColBlock_5.enabled(true).refresh();
        TwoColBlock_6.enabled(true).refresh();



    } else {
        TwoColBlock_1.enabled(false).refresh();
        TwoColBlock_2.enabled(false).refresh();
        TwoColBlock_2_Pic1.enabled(false).refresh();
        TwoColBlock_2_Pic2.enabled(false).refresh();
        TwoColBlock_3.enabled(false).refresh();
        TwoColBlock_4.enabled(false).refresh();
        TwoColBlock_5.enabled(false).refresh();
        TwoColBlock_6.enabled(false).refresh();

        document.querySelector('#two-col-block-1-text').style.transform = 'translate(0px, 0vh)';
        document.querySelector('#two-col-block-2-text').style.transform = 'translate(0px, 0vh)';
        document.querySelector('#two-col-block-2-pic-1').style.transform = 'translate(0px, 0vh)';
        document.querySelector('#two-col-block-2-pic-2').style.transform = 'translate(0px, 0vh)';
        document.querySelector('#two-col-block-3-text').style.transform = 'translate(0px, 0vh)';
        document.querySelector('#two-col-block-4-text').style.transform = 'translate(0px, 0vh)';
        document.querySelector('#two-col-block-5-text').style.transform = 'translate(0px, 0vh)';
        document.querySelector('#two-col-block-6-text').style.transform = 'translate(0px, 0vh)';
    }


}

function initCoverAnimation() {

    let halfHeight = window.innerHeight / 100;

    coverTextHideScene = new ScrollMagic.Scene({
        triggerElement: ".trigger-1",
        duration: "30%",
        triggerHook: 1,
        offset: halfHeight * 35
    })
        .setTween(gsap.timeline().to(".cover__body", {
            opacity: 0,
            duration: 1
        }))
        .addTo(controller);

    coverHideScene = new ScrollMagic.Scene({
        triggerElement: ".trigger-1",
        duration: "30%",
        triggerHook: 1,
        offset: halfHeight * 35
    })
        .setTween(gsap.timeline().to(".cover-bg", {
            opacity: 0,
            duration: 1
        }))
        .addTo(controller);

    coverHideTransScene = new ScrollMagic.Scene({
        triggerElement: ".flyout-block",
        duration: "100%",
        triggerHook: 1,
    })
        .setTween(gsap.timeline().to(".cover-bg", {
            y: '-100vh',
            ease: Linear.easeOut
        }))
        .addTo(controller);


    desertHideScene = new ScrollMagic.Scene({
        triggerElement: ".trigger-2",
        duration: "30%",
        triggerHook: 1,
        offset: halfHeight * 35
    })
        .setTween(gsap.timeline().to(".desert-bg", {
            opacity: 1,
            ease: Linear.easeNone
        }))
        .addTo(controller);


    desertParalaxScene = new ScrollMagic.Scene({
        triggerElement: ".trigger-3",
        duration: "90%",
        triggerHook: 1
    })
        .setTween(gsap.timeline().to(".desert-bg", {
            y: "-100vh", ease: Linear.easeOut
        }))
        .addTo(controller);


    desertTextParalaxScene = new ScrollMagic.Scene({
        triggerElement: ".trigger-2",
        duration: "165%",
        triggerHook: 1
    })
        .setTween(gsap.timeline().to(".desert__infinite-majesty", {
            y: '-30vh',
            ease: Linear.easeNone
        }))
        .addTo(controller);

    desertTextOpacityScene = new ScrollMagic.Scene({
        triggerElement: ".trigger-2-5",
        duration: "10%",
        triggerHook: 1
    })
        .setTween(gsap.timeline().to(".desert__infinite-majesty", {
            opacity: 1,
            ease: Linear.easeNone
        }))
        .addTo(controller);


    TwoColBlock_1 = new ScrollMagic.Scene({
        triggerElement: "#two-col-block-1",
        duration: "150%",
        triggerHook: 1,
    })
        .setTween(gsap.timeline().to("#two-col-block-1-text", {
            y: window.innerWidth > 1280 ? '12vw' : '25vh', ease: Linear.easeNone
        }))
        .addTo(controller);

    TwoColBlock_2 = new ScrollMagic.Scene({
        triggerElement: "#two-col-block-2",
        duration: "150%",
        triggerHook: 1,
    })
        .setTween(gsap.timeline().to("#two-col-block-2-text", {
            y: window.innerWidth > 1280 ? '30vh' : '25vh', ease: Linear.easeNone
        }))
        .addTo(controller);

    TwoColBlock_2_Pic1 = new ScrollMagic.Scene({
        triggerElement: "#two-col-block-2",
        duration: "70%",
        triggerHook: 1,
    })
        .setTween(gsap.timeline().to("#two-col-block-2-pic-1", {
            x: '0vw', y: '0vh', ease: Linear.easeNone
        }))
        .addTo(controller);

    TwoColBlock_2_Pic2 = new ScrollMagic.Scene({
        triggerElement: "#two-col-block-2",
        duration: "70%",
        triggerHook: 1,
    })
        .setTween(gsap.timeline().to("#two-col-block-2-pic-2", {
            x: '0vw', y: '0vh', ease: Linear.easeNone
        }))
        .addTo(controller);


    TwoColBlock_3 = new ScrollMagic.Scene({
        triggerElement: "#two-col-block-3",
        duration: "250%",
        triggerHook: 1,
    })
        .setTween(gsap.timeline().to("#two-col-block-3-text", {
            y: window.innerWidth > 1280 ? '60vh' : '25vh', ease: Linear.easeNone
        }))
        .addTo(controller);

    TwoColBlock_4 = new ScrollMagic.Scene({
        triggerElement: "#two-col-block-4",
        duration: "140%",
        triggerHook: 1,
    })
        .setTween(gsap.timeline().to("#two-col-block-4-text", {
            y: window.innerWidth > 1280 ? '12vw' : '25vh', ease: Linear.easeNone
        }))
        .addTo(controller);


    TwoColBlock_5 = new ScrollMagic.Scene({
        triggerElement: "#two-col-block-5",
        duration: "140%",
        triggerHook: 1,
    })
        .setTween(gsap.timeline().to("#two-col-block-5-text", {
            y: window.innerWidth > 1280 ? '15vw' : '25vh', ease: Linear.easeNone
        }))
        .addTo(controller);


    TwoColBlock_6 = new ScrollMagic.Scene({
        triggerElement: "#two-col-block-6",
        duration: "140%",
        triggerHook: 1,
    })
        .setTween(gsap.timeline().to("#two-col-block-6-text", {
            y: window.innerWidth > 1280 ? '40vh' : '25vh', ease: Linear.easeNone
        }))
        .addTo(controller);


}
