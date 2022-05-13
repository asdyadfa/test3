'use strict';

document.getElementById('btns').onclick = function() {
    document.querySelector('.nav').classList.toggle('asnav');
    document.querySelector('.nav').classList.toggle('asanav');
}

let music = 0;
const EH = new Audio('mp3/eh.mp3');

document.getElementById('idea').addEventListener('click', function() {
    music++;
    if(music % 2 === 1) {
    EH.play();
    }else {
        EH.pause();
    }
})
