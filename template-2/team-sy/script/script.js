'use strict';

document.getElementById('btns').onclick = function() {
    document.querySelector('.nav').classList.toggle('asnav');
    document.querySelector('.nav').classList.toggle('asanav');
}

document.querySelector('.margin-bord').onclick = function() {
    document.querySelector('.white-sxs').classList.toggle('spectm');
}

const times = () => {
    document.querySelector('.margin-bord').classList.toggle('margins');
    timeOKs();
};

const timeOKs = () => {
    setTimeout(times, 5000);
}

timeOKs();

let i = 0;

document.querySelector('.membersp').onclick = function() {
    document.querySelector('.the-list').classList.toggle('dismem');
    document.querySelector('.spec-list').classList.toggle('dismem');
    document.querySelector('.videos').classList.toggle('dismem');
    document.querySelector('.stay-take').classList.remove('opacitys');
}

document.querySelectorAll('.member li').forEach(function(item) {
    item.onclick = function() {
        const highs = this.dataset.messages;
        document.querySelector('.stay-take strong').textContent = highs;
        document.querySelector('.stay-take strong').classList.toggle('spel-opacity');
        document.querySelector('.stay-take strong').classList.toggle('spel-opacitys');
        document.querySelector('.stay-take').classList.remove('opacitys');
        document.querySelector('.stay-take').classList.remove('dismem');
    }
});

document.getElementById('sorrywaits').onclick = function() {
    document.querySelector('.stay-take').classList.add('opacitys');
}

document.querySelector('.exs').onclick = function() {
    document.querySelector('.highland').classList.toggle('togglestar');
    document.querySelector('.highland').classList.add('umbs');
    document.querySelectorAll('.a').forEach(function(items, index) {
        items.classList.toggle('opacity-5');
    })
}

document.querySelector('.astitle').onclick = function() {
    document.querySelector('.highland').classList.add('togglestar');
    document.querySelector('.highland').classList.remove('umbs');
    document.querySelector('.highland').classList.remove('umbsd');
    document.querySelectorAll('.a').forEach(function(items, index) {
        items.classList.add('opacity-5');
    })
}