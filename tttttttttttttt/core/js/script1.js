var slides1 = document.querySelectorAll('.pic1');
var massIm1 = [];
var dl1 = slides1.length;
var platon1 = "https://raaay-lab.github.io/philosophy/core/index1.html" ;
var avreliy1 = "Raaay-lab.github.io/philosophy/core/index1.html";

console.log(slides1)

function createImg1() {
    for (var i = 0; i < slides1.length; i++) {
        massIm1[i] = slides1[i].src;
        slides1[i].remove();
    }
}

var current1 = 0;
var imgMain1 = document.createElement('img');

function presentation1() {
    $('.slider1').empty();
    imgMain1.src = massIm1[current1];
    imgMain1.classList.add('pic1');
    document.querySelector('.slider1').appendChild(imgMain1);
}

var curR1 = current1 + 1;
var imgR1 = document.createElement('img');

function presRight1() {
    moveRight1();
    console.log(curR1)
    imgR1.src = massIm1[curR1];
    imgR1.classList.add('pic1');
    document.querySelector('.slider1').appendChild(imgR1);
}

var curL1 = dl1 - 1;
var imgL1 = document.createElement('img');

function presLeft1() {
    moveLeft1();
    imgL1.src = massIm1[curL1];
    imgL1.classList.add('pic1');
    document.querySelector('.slider1').appendChild(imgL1);
}

function textCreat1() {
    console.log(current1)
    if (current1 == 0) {
        $('.section-text1').empty();
        var newElems = $(".section-text1")
            .append("<h2><strong>Древнее Время.</strong><br>(3000 г. до н. э. — 476 г. н. э.)</h2>");
        $('.section-text1').replaceWith(newElems);
    }
    if (current1 == 1) {
        $('.section-text1').empty();
        var newElems = $(".section-text1")
            .append("<h2><a href=" + avreliy1 + "><strong>Аврелий Августин</strong></h2>");
        $('.section-text1').replaceWith(newElems);
    }
    if (current1 == 2) {
        $('.section-text1').empty();
        var newElems = $(".section-text1")
            .append("<h2><a href=" + platon1 + "><strong>Платон</strong></a></h2>");
        $('.section-text1').replaceWith(newElems);
    }
}

function moveLeft1() {

    if (current1 <= 0) {
        current1 = dl1 - 1;
    } else {
        current1--;
    }

    if (curR1 <= 0) {
        curR1 = dl1 - 1;
    } else {
        curR1--;
    }

    if (curL1 <= 0) {
        curL1 = dl1 - 1;
    } else {
        curL1--;
    }

    presentation1();
    textCreat1();

}

function moveRight1() {

    if (current1 + 1 == dl1) { //центр
        current1 = 0;
    } else {
        current1++;
    }

    if (curR1 + 1 == dl1) { //справа
        curR1 = 0;
    } else {
        curR1++;
    }

    if (curL1 + 1 == dl1) { //cлева
        curL1 = 0;
    } else {
        curL1++;
    }

    presentation1();
    textCreat1();
}

$(document).ready(function() {
    createImg1();
    presentation1();
});
