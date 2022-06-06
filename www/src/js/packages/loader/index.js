import visibleCheck from "../visable_check";

if(window.shouldLoadedArray === undefined){
    window.shouldLoadedArray = [];
}


function loadOnVisableCheck(id, file, selector) {
    //console.log(window.shouldLoadedArray)
    if (window.shouldLoadedArray[id] === true) return;
    if (document.querySelector(selector) === false) return;

    let src = window.SITE_TEMPLATE_PATH + '/js/' + file + '?v=' + window.version;
    if(String(file).indexOf('http') > -1){
        src = file;
    }

    let script = document.createElement('script');
    script.setAttribute('src', src);
    script.setAttribute('charset', "utf-8");
    document.querySelector('body').appendChild(script);
    window.shouldLoadedArray[id] = true;
}

export function shouldLoadJs(id, file, selector) {
    window.shouldLoadedArray[id] = false;
    window.addEventListener('DOMContentLoaded', () => {
        setTimeout(() => {
            loadOnVisableCheck(id, file, selector);
        }, 5000);

        if (document.querySelector(selector)) {
            visibleCheck(document.querySelector(selector), () => {
                loadOnVisableCheck(id, file, selector)
            });
        }
    });
}
export function immediatelyLoadJs(id, file) {
    loadOnVisableCheck(id, file);
}
