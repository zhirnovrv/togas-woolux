!function(){"use strict";var e,t={903:function(e,t,r){var o,n,l,a,i,c,s,d,u,f,w,b,g,m,y,h,p=r(306),v=r.n(p),k=r(716),S=r(317);function x(){window.innerWidth>=768?(document.querySelector(".desert__infinite-majesty").style.transform="translate(0, 130vh)",n.enabled(!0).refresh(),i.enabled(!0).refresh(),d.enabled(!0).refresh(),l.enabled(!0).refresh(),a.enabled(!0).refresh(),c.enabled(!0).refresh(),s.enabled(!0).refresh()):(document.querySelector(".desert__infinite-majesty").style.transform="",document.querySelector(".desert__infinite-majesty").opacity="1",document.querySelector(".cover__body").style.opacity="1",document.querySelector(".cover-bg").style.transform="",document.querySelector(".cover-bg").style.opacity="1",document.querySelector(".desert-bg").style.transform="",document.querySelector(".desert-bg").style.opacity="1",n.enabled(!1).refresh(),i.enabled(!1).refresh(),d.enabled(!1).refresh(),l.enabled(!1).refresh(),a.enabled(!1).refresh(),c.enabled(!1).refresh(),s.enabled(!1).refresh()),window.innerWidth>=1024?(document.querySelector("#two-col-block-1-text").style.transform="translate(0, 0)",document.querySelector("#two-col-block-2-text").style.transform="translate(0, 10vh)",document.querySelector("#two-col-block-2-pic-1").style.transform="translate(-15px, 25vh)",document.querySelector("#two-col-block-2-pic-2").style.transform="translate(-25px, 35vh)",document.querySelector("#two-col-block-3-text").style.transform="translate(0, 0)",document.querySelector("#two-col-block-4-text").style.transform="translate(0, 0)",document.querySelector("#two-col-block-5-text").style.transform="translate(0, 0)",document.querySelector("#two-col-block-6-text").style.transform="translate(0, 0)",u.enabled(!0).refresh(),f.enabled(!0).refresh(),w.enabled(!0).refresh(),b.enabled(!0).refresh(),g.enabled(!0).refresh(),m.enabled(!0).refresh(),y.enabled(!0).refresh(),h.enabled(!0).refresh()):(u.enabled(!1).refresh(),f.enabled(!1).refresh(),w.enabled(!1).refresh(),b.enabled(!1).refresh(),g.enabled(!1).refresh(),m.enabled(!1).refresh(),y.enabled(!1).refresh(),h.enabled(!1).refresh(),document.querySelector("#two-col-block-1-text").style.transform="translate(0px, 0vh)",document.querySelector("#two-col-block-2-text").style.transform="translate(0px, 0vh)",document.querySelector("#two-col-block-2-pic-1").style.transform="translate(0px, 0vh)",document.querySelector("#two-col-block-2-pic-2").style.transform="translate(0px, 0vh)",document.querySelector("#two-col-block-3-text").style.transform="translate(0px, 0vh)",document.querySelector("#two-col-block-4-text").style.transform="translate(0px, 0vh)",document.querySelector("#two-col-block-5-text").style.transform="translate(0px, 0vh)",document.querySelector("#two-col-block-6-text").style.transform="translate(0px, 0vh)")}(0,r(648).ScrollMagicPluginGsap)(v(),k.p8),S.iC.defaultEase=S.bJ.easeNone,window.addEventListener("DOMContentLoaded",(function(){var e;o=new(v().Controller),e=window.innerHeight/100,n=new(v().Scene)({triggerElement:".trigger-1",duration:"30%",triggerHook:1,offset:35*e}).setTween(k.p8.timeline().to(".cover__body",{opacity:0,duration:1})).addTo(o),i=new(v().Scene)({triggerElement:".trigger-1",duration:"30%",triggerHook:1,offset:35*e}).setTween(k.p8.timeline().to(".cover-bg",{opacity:0,duration:1})).addTo(o),d=new(v().Scene)({triggerElement:".flyout-block",duration:"100%",triggerHook:1}).setTween(k.p8.timeline().to(".cover-bg",{y:"-100vh",ease:S.bJ.easeOut})).addTo(o),l=new(v().Scene)({triggerElement:".trigger-2",duration:"30%",triggerHook:1,offset:35*e}).setTween(k.p8.timeline().to(".desert-bg",{opacity:1,ease:S.bJ.easeNone})).addTo(o),a=new(v().Scene)({triggerElement:".trigger-3",duration:"90%",triggerHook:1}).setTween(k.p8.timeline().to(".desert-bg",{y:"-100vh",ease:S.bJ.easeOut})).addTo(o),c=new(v().Scene)({triggerElement:".trigger-2",duration:"165%",triggerHook:1}).setTween(k.p8.timeline().to(".desert__infinite-majesty",{y:"-30vh",ease:S.bJ.easeNone})).addTo(o),s=new(v().Scene)({triggerElement:".trigger-2-5",duration:"10%",triggerHook:1}).setTween(k.p8.timeline().to(".desert__infinite-majesty",{opacity:1,ease:S.bJ.easeNone})).addTo(o),u=new(v().Scene)({triggerElement:"#two-col-block-1",duration:"150%",triggerHook:1}).setTween(k.p8.timeline().to("#two-col-block-1-text",{y:window.innerWidth>1280?"12vw":"25vh",ease:S.bJ.easeNone})).addTo(o),f=new(v().Scene)({triggerElement:"#two-col-block-2",duration:"150%",triggerHook:1}).setTween(k.p8.timeline().to("#two-col-block-2-text",{y:window.innerWidth>1280?"30vh":"25vh",ease:S.bJ.easeNone})).addTo(o),w=new(v().Scene)({triggerElement:"#two-col-block-2",duration:"70%",triggerHook:1}).setTween(k.p8.timeline().to("#two-col-block-2-pic-1",{x:"0vw",y:"0vh",ease:S.bJ.easeNone})).addTo(o),b=new(v().Scene)({triggerElement:"#two-col-block-2",duration:"70%",triggerHook:1}).setTween(k.p8.timeline().to("#two-col-block-2-pic-2",{x:"0vw",y:"0vh",ease:S.bJ.easeNone})).addTo(o),g=new(v().Scene)({triggerElement:"#two-col-block-3",duration:"250%",triggerHook:1}).setTween(k.p8.timeline().to("#two-col-block-3-text",{y:window.innerWidth>1280?"60vh":"25vh",ease:S.bJ.easeNone})).addTo(o),m=new(v().Scene)({triggerElement:"#two-col-block-4",duration:"140%",triggerHook:1}).setTween(k.p8.timeline().to("#two-col-block-4-text",{y:window.innerWidth>1280?"12vw":"25vh",ease:S.bJ.easeNone})).addTo(o),y=new(v().Scene)({triggerElement:"#two-col-block-5",duration:"140%",triggerHook:1}).setTween(k.p8.timeline().to("#two-col-block-5-text",{y:window.innerWidth>1280?"15vw":"25vh",ease:S.bJ.easeNone})).addTo(o),h=new(v().Scene)({triggerElement:"#two-col-block-6",duration:"140%",triggerHook:1}).setTween(k.p8.timeline().to("#two-col-block-6-text",{y:window.innerWidth>1280?"40vh":"25vh",ease:S.bJ.easeNone})).addTo(o),x()})),window.addEventListener("orientationchange",(function(){window.scrollTo(0,0),x()})),window.addEventListener("resize",(function(){x()}))}},r={};function o(e){var n=r[e];if(void 0!==n)return n.exports;var l=r[e]={exports:{}};return t[e].call(l.exports,l,l.exports,o),l.exports}o.m=t,e=[],o.O=function(t,r,n,l){if(!r){var a=1/0;for(d=0;d<e.length;d++){r=e[d][0],n=e[d][1],l=e[d][2];for(var i=!0,c=0;c<r.length;c++)(!1&l||a>=l)&&Object.keys(o.O).every((function(e){return o.O[e](r[c])}))?r.splice(c--,1):(i=!1,l<a&&(a=l));if(i){e.splice(d--,1);var s=n();void 0!==s&&(t=s)}}return t}l=l||0;for(var d=e.length;d>0&&e[d-1][2]>l;d--)e[d]=e[d-1];e[d]=[r,n,l]},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,{a:t}),t},o.d=function(e,t){for(var r in t)o.o(t,r)&&!o.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},function(){var e={kashmir:0};o.O.j=function(t){return 0===e[t]};var t=function(t,r){var n,l,a=r[0],i=r[1],c=r[2],s=0;if(a.some((function(t){return 0!==e[t]}))){for(n in i)o.o(i,n)&&(o.m[n]=i[n]);if(c)var d=c(o)}for(t&&t(r);s<a.length;s++)l=a[s],o.o(e,l)&&e[l]&&e[l][0](),e[a[s]]=0;return o.O(d)},r=self.webpackChunkTogas=self.webpackChunkTogas||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))}();var n=o.O(void 0,["npm.gsap","npm.scrollmagic","npm.scrollmagic-plugin-gsap"],(function(){return o(903)}));n=o.O(n)}();