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
    LordOfDesertScene,
    NoWeightScene,
    NoWeightScenePic1,
    NoWeightScenePic2,
    TendernessTouchScene,
    EmbraceOfWarmthScene,
    CamelsAboutScene, coverHideTransScene;

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

        document.querySelector('.desert__infinite-majesty').style.transform= 'translate(0, 90vh)';

        coverTextHideScene.enabled(true).refresh();
        coverHideScene.enabled(true).refresh();
        coverHideTransScene.enabled(true).refresh();
        desertHideScene.enabled(true).refresh();
        desertParalaxScene.enabled(true).refresh();
        desertTextParalaxScene.enabled(true).refresh();

    } else {
        coverTextHideScene.enabled(false).refresh();
        coverHideScene.enabled(false).refresh();
        coverHideTransScene.enabled(false).refresh();
        desertHideScene.enabled(false).refresh();
        desertParalaxScene.enabled(false).refresh();
        desertTextParalaxScene.enabled(false).refresh();
    }
    if (window.innerWidth >= 1024) {

        document.querySelector('#camels-about').style.transform= 'translate(0, 0)';
        document.querySelector('#embrace-of-warmth-text').style.transform= 'translate(0, 0)';
        document.querySelector('#tenderness-touch-text').style.transform= 'translate(0, 0)';
        document.querySelector('#lord-of-desert-text').style.transform= 'translate(0, 0)';
        document.querySelector('#purity-of-youth-text').style.transform= 'translate(0, 10vh)';
        document.querySelector('#purity-of-youth-1').style.transform= 'translate(-15px, 25vh)';
        document.querySelector('#purity-of-youth-2').style.transform= 'translate(-25px, 35vh)';

        LordOfDesertScene.enabled(true).refresh();
        NoWeightScene.enabled(true).refresh();
        NoWeightScenePic1.enabled(true).refresh();
        NoWeightScenePic2.enabled(true).refresh();
        TendernessTouchScene.enabled(true).refresh();
        EmbraceOfWarmthScene.enabled(true).refresh();
        CamelsAboutScene.enabled(true).refresh();

    } else {
        LordOfDesertScene.enabled(false).refresh();
        NoWeightScene.enabled(false).refresh();
        NoWeightScenePic1.enabled(false).refresh();
        NoWeightScenePic2.enabled(false).refresh();
        TendernessTouchScene.enabled(false).refresh();
        EmbraceOfWarmthScene.enabled(false).refresh();
        CamelsAboutScene.enabled(false).refresh();

        document.querySelector('#camels-about').style.transform= 'translate(0px, 0vh)';
        document.querySelector('#embrace-of-warmth-text').style.transform= 'translate(0px, 0vh)';
        document.querySelector('#tenderness-touch-text').style.transform= 'translate(0px, 0vh)';
        document.querySelector('#lord-of-desert-text').style.transform= 'translate(0px, 0vh)';
        document.querySelector('#purity-of-youth-text').style.transform= 'translate(0px, 0vh)';
        document.querySelector('#purity-of-youth-1').style.transform= 'translate(0px, 0vh)';
        document.querySelector('#purity-of-youth-2').style.transform= 'translate(0px, 0vh)';
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
        duration: "150%",
        triggerHook: 1
    })
        .setTween(gsap.timeline().to(".desert__infinite-majesty", {
            y: '-30vh', ease: Linear.easeNone
        }))
        .addTo(controller);

    LordOfDesertScene = new ScrollMagic.Scene({
        triggerElement: "#lord-of-desert-block",
        duration: "150%",
        triggerHook: 1,
    })
        .setTween(gsap.timeline().to("#lord-of-desert-text", {
            y: window.innerWidth > 1280 ? '40vh' : '25vh', ease: Linear.easeNone
        }))
        .addTo(controller);

    NoWeightScene = new ScrollMagic.Scene({
        triggerElement: "#purity-of-youth",
        duration: "150%",
        triggerHook: 1,
    })
        .setTween(gsap.timeline().to("#purity-of-youth-text", {
            y: window.innerWidth > 1280 ? '40vh' : '25vh', ease: Linear.easeNone
        }))
        .addTo(controller);

    NoWeightScenePic1 = new ScrollMagic.Scene({
        triggerElement: "#purity-of-youth",
        duration: "70%",
        triggerHook: 1,
    })
        .setTween(gsap.timeline().to("#purity-of-youth-1", {
            x: '0vw', y: '0vh', ease: Linear.easeNone
        }))
        .addTo(controller);

    NoWeightScenePic2 = new ScrollMagic.Scene({
        triggerElement: "#purity-of-youth",
        duration: "70%",
        triggerHook: 1,
    })
        .setTween(gsap.timeline().to("#purity-of-youth-2", {
            x: '0vw', y: '0vh', ease: Linear.easeNone
        }))
        .addTo(controller);


    TendernessTouchScene = new ScrollMagic.Scene({
        triggerElement: "#tenderness-touch-block",
        duration: "250%",
        triggerHook: 1,
    })
        .setTween(gsap.timeline().to("#tenderness-touch-text", {
            y: window.innerWidth > 1280 ? '40vh' : '25vh', ease: Linear.easeNone
        }))
        .addTo(controller);

    EmbraceOfWarmthScene = new ScrollMagic.Scene({
        triggerElement: "#embrace-of-warmth-block",
        duration: "140%",
        triggerHook: 1,
    })
        .setTween(gsap.timeline().to("#embrace-of-warmth-text", {
            y: window.innerWidth > 1280 ? '40vh' : '25vh', ease: Linear.easeNone
        }))
        .addTo(controller);


    CamelsAboutScene = new ScrollMagic.Scene({
        triggerElement: "#trigger-4",
        duration: "120%",
        triggerHook: 1,
    })
        .setTween(gsap.timeline().to("#camels-about", {
            y: '50vh', ease: Linear.easeNone
        }))
        .addTo(controller);

}
