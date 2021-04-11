var slides3 = document.querySelectorAll('.pic3');
var massImg3 = [];
var dl3 = slides3.length;
var furie = "https://raaay-lab.github.io/philosophy/core/index3.html";
var mele = "https://raaay-lab.github.io/philosophy/core/index7.html";



function createImg3() {
    for (var i = 0; i < slides3.length; i++) {
        massImg3[i] = slides3[i].src;
        slides3[i].remove();
    }
}

console.log(slides3)
var cur3 = 0;
var imgMain3 = document.createElement('img');

function presentation3() {
    $('.slider3').empty();
    imgMain3.src = massImg3[cur3];
    imgMain3.classList.add('pic3');
    document.querySelector('.slider3').appendChild(imgMain3);
}

var curR3 = cur3 + 1;
var imgR3 = document.createElement('img');

function presRight3() {
    imgR3.src = massImg3[curR3];
    imgR3.classList.add('pic3');
    document.querySelector('.slider3').appendChild(imgR3);
}

var curL3 = dl3 - 1;
var imgL3 = document.createElement('img');

function presLeft3() {
    imgL3.src = massImg3[curL3];
    imgL3.classList.add('pic3');
    document.querySelector('.slider3').appendChild(imgL3);
}

function textCreat3() {
    console.log(cur3)
    if (cur3 == 0) {
        $('.section-text3').empty();
        var newElems = $(".section-text3")
            .append("<h2><strong>Новое время.</strong><br>(конец XV в. — 1918 г.)</h2>");
        $('.section-text3').replaceWith(newElems);
    }
    if (cur3 == 1) {
        $('.section-text3').empty();
        var newElems = $(".section-text3")
            .append("<h2><a href=" + furie + "><strong>Шарль Фурье</strong></a></h2>");
        $('.section-text3').replaceWith(newElems);
    }
    if (cur3 == 2) {
        $('.section-text3').empty();
        var newElems = $(".section-text3")
            .append("<h2><a href=" + mele + "><strong>Жан Мелье</strong></a></h2>");
        $('.section-text3').replaceWith(newElems);
    }
}

function moveLeft3() {

    if (cur3 <= 0) {
        cur3 = dl3 - 1;
    } else {
        cur3--;
    }

    if (curR3 <= 0) {
        curR3 = dl3 - 1;
    } else {
        curR3--;
    }

    if (curL3 <= 0) {
        curL3 = dl3 - 1;
    } else {
        curL3--;
    }

    presentation3();
    textCreat3();

}

function moveRight3() {

    if (cur3 + 1 == dl3) { //центр
        cur3 = 0;
    } else {
        cur3++;
    }

    if (curR3 + 1 == dl3) { //справа
        curR3 = 0;
    } else {
        curR3++;
    }

    if (curL3 + 1 == dl3) { //cлева
        curL3 = 0;
    } else {
        curL3++;
    }

    presentation3();
    textCreat3();
}

$(document).ready(function() {
    createImg3();
    presentation3();
});
