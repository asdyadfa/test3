'use strict';

document.getElementById('btns').onclick = function() {
    document.querySelector('.nav').classList.toggle('asnav');
    document.querySelector('.nav').classList.toggle('asanav');
}


const numberBtn = document.querySelectorAll('.number-btn');
const srcDoc = document.querySelectorAll('.videos iframe');
const videos = ['https://www.youtube.com/embed/hyEgTVRV_ag', 'https://www.youtube.com/embed/D5y5tGxx5bw'];
const videos_2 = ['https://www.youtube.com/embed/9kmddyXd2Xg'];
const TITLE_1 = ['Eternity', 'Installed'];
const TITLE_2 = ['Cosmos']

numberBtn.forEach(function(items, index) {
    items.onclick = function() {
        const numberset = this.dataset.number;
        srcDoc[0].src = videos[numberset];
        srcDoc[1].src = videos_2[numberset];
        document.querySelectorAll('.video h3')[0].textContent = TITLE_1[numberset];
        document.querySelectorAll('.video h3')[1].textContent = TITLE_2[numberset];
        document.querySelectorAll('.video h3').forEach(function(item, index) {
            item.classList.toggle('style');
        })
    }
})