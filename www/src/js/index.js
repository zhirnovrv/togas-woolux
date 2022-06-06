let calc

let calcSizes = () => {
    let iframe = document.querySelector('#iframebg');
    let coverContainer = document.querySelector('.index-cover__container');
    let innerWidth = window.innerWidth;
    let innerHeight;
    let containerWidth = coverContainer.offsetWidth;
    let containerHeight = coverContainer.offsetHeight;
    let [videoWidth, videoHeight] = [3840, 2160];

    switch (true) {
        case innerWidth < 1024:
            innerHeight = 546;
            break;
        case innerWidth >= 1024:
            innerHeight = window.innerHeight - 100;
            break;
    }

    let percentage = innerWidth / (videoWidth / 100);
    let ratio = videoHeight / (videoWidth / 100);
    let ratio2 = videoWidth / (videoHeight / 100);

    let calcVideoWidth = Math.round((videoWidth / 100) * percentage);
    let calcVideoHeight = Math.round((videoHeight / 100) * percentage);

    switch (true) {
        case containerHeight < calcVideoHeight:
            calcVideoWidth = containerWidth;
            calcVideoHeight = containerWidth / 100 * ratio;
            break;

        case containerHeight >= calcVideoHeight :
            calcVideoWidth = (containerHeight) * (ratio2 / 100)
            calcVideoHeight = containerHeight;
            break;
    }

    //calcVideoWidth = calcVideoWidth * 1;
    calcVideoHeight = calcVideoHeight * 1.21;

    iframe.style.width = calcVideoWidth + 'px';
    iframe.style.marginLeft = '-' + ((calcVideoWidth - innerWidth) / 2) + 'px';

    iframe.style.height = calcVideoHeight + 'px';
    iframe.style.marginTop = '-' + ((calcVideoHeight - innerHeight) / 2) + 'px';
}


window.addEventListener('DOMContentLoaded', () => {
    calcSizes();
    //console.log('DOMContentLoaded');

    let tag = document.createElement('script');
    tag.src = "https://www.youtube.com/player_api";
    let firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

});
window.addEventListener('resize', () => {
    calcSizes();
    //console.log('resize');
});





function onPlayerReady(){
    player.playVideo();
}
function  onPlayerStateChange(e){
    let obj = e;
    //console.log('onPlayerStateChang', e);
    //console.log('onPlayerStateChang', e.target.getCurrentTime());
    //console.log('onPlayerStateChang', e.target.getDuration());
    setTimeout(() => {
        document.querySelector('.index-cover-bg__video').classList.add('show');
        document.querySelector('.index-cover__container').classList.add('video');
    }, 1000);

    let timeout = (obj.target.getDuration() - 1) * 1000;
    setTimeout(() => {
        obj.target.clearVideo();
        obj.target.seekTo(0);
    },  timeout);

    //console.log(YT.PlayerState)
}
let player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('iframebg', {
        videoId: 'lEomgk8sz-4',
        playerVars: { 'autoplay': 1, 'controls': 0, 'start': 0 },
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });
}
window.onYouTubeIframeAPIReady = onYouTubeIframeAPIReady;
window.onPlayerReady = onPlayerReady;
window.onPlayerStateChange =  onPlayerStateChange;
