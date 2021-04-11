var slides4 = document.querySelectorAll('.pic4');
var massimg4 = [];
var dl4 = slides4.length;
var ed = "core/index4.html";

function createImg4() {
    for (var i = 0; i < slides4.length; i++) {
        massimg4[i] = slides4[i].src;
        slides4[i].remove();
    }
}

console.log(slides4)

var cur4 = 0;
var imgmain4 = document.createElement('img');

function presentation4() {
    $('.slider4').empty();
    imgmain4.src = massimg4[cur4];
    imgmain4.classList.add('pic4');
    document.querySelector('.slider4').appendChild(imgmain4);
}

var curR4 = cur4 + 1;
var imgR4 = document.createElement('img');

function presRight4() {
    imgR4.src = massimg4[curR4];
    imgR4.classList.add('pic4');
    document.querySelector('.slider4').appendChild(imgR4);
}

var curL4 = dl4 - 1;
var imgL4 = document.createElement('img');

function presLeft4() {
    imgL4.src = massimg4[curL4];
    imgL4.classList.add('pic4');
    document.querySelector('.slider4').appendChild(imgL4);
}

function textCreat4() {
    console.log(cur4)
    if (cur4 == 0) {
        $('.section-text4').empty();
        var newElems = $(".section-text4")
            .append("<h2><strong>Новейшее время.</strong><br>(с 1918 г. — наше время)</h2>");
        $('.section-text4').replaceWith(newElems);
    }
    if (cur4 == 1) {
        $('.section-text4').empty();
        var newElems = $(".section-text4")
            .append("<h2><a href=" + ed + "><strong>Эдвард Бэлами</strong></a></h2>");
        $('.section-text4').replaceWith(newElems);
    }
}

function moveLeft4() {

    if (cur4 <= 0) {
        cur4 = dl4 - 1;
    } else {
        cur4--;
    }

    if (curR4 <= 0) {
        curR4 = dl4 - 1;
    } else {
        curR4--;
    }

    if (curL4 <= 0) {
        curL4 = dl4 - 1;
    } else {
        curL4--;
    }

    presentation4();
    textCreat4();

}

function moveRight4() {

    if (cur4 + 1 == dl4) { //центр
        cur4 = 0;
    } else {
        cur4++;
    }

    if (curR4 + 1 == dl4) { //справа
        curR4 = 0;
    } else {
        curR4++;
    }

    if (curL4 + 1 == dl4) { //cлева
        curL4 = 0;
    } else {
        curL4++;
    }

    presentation4();
    textCreat4();
}

$(document).ready(function() {
    createImg4();
    presentation4();
});