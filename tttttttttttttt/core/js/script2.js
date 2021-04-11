var slides = document.querySelectorAll('.pic2');
var massImg = [];
var dl = slides.length;
var kompanella = "https://raaay-lab.github.io/philosophy/core/index2.html";
var mor = "https://raaay-lab.github.io/philosophy/core/index6.html";

function createImg2() {
    for (var i = 0; i < slides.length; i++) {
        massImg[i] = slides[i].src;
        slides[i].remove();
    }
}

console.log(slides)
var current = 0;
var imgMain = document.createElement('img');

function presentation2() {
    $('.slider2').empty();
    imgMain.src = massImg[current];
    imgMain.classList.add('pic2');
    document.querySelector('.slider2').appendChild(imgMain);
}

var currentRight = current + 1;
var imgRight = document.createElement('img');

function presRight2() {
    imgRight.src = massImg[currentRight];
    imgRight.classList.add('pic2');
    document.querySelector('.slider2').appendChild(imgRight);
}

var currentLeft = dl - 1;
var imgLeft = document.createElement('img');

function presLeft2() {
    imgLeft.src = massImg[currentLeft];
    imgLeft.classList.add('pic2');
    document.querySelector('.slider2').appendChild(imgLeft);
}

function textCreat2() {
    console.log(current)
    if (current == 0) {
        $('.section-text2').empty();
        var newElems = $(".section-text2")
            .append("<h2><strong>Средние века.</strong><br>(476 г. — конец XV в.)</h2>");
        $('.section-text2').replaceWith(newElems);
    }
    if (current == 1) {
        $('.section-text2').empty();
        var newElems = $(".section-text2")
            .append("<h2><a href=" + mor + "><strong>Томас Мор</strong></a></h2>");
        $('.section-text2').replaceWith(newElems);
    }
    if (current == 2) {
        $('.section-text2').empty();
        var newElems = $(".section-text2")
            .append("<h2><a href=" + kompanella + "><strong>Томазо Кампанелла</strong></a></h2>");
        $('.section-text2').replaceWith(newElems);
    }
}

function moveLeft2() {

    if (current <= 0) {
        current = dl - 1;
    } else {
        current--;
    }

    if (currentRight <= 0) {
        currentRight = dl - 1;
    } else {
        currentRight--;
    }

    if (currentLeft <= 0) {
        currentLeft = dl - 1;
    } else {
        currentLeft--;
    }

    presentation2();
    textCreat2();

}

function moveRight2() {

    if (current + 1 == dl) { //центр
        current = 0;
    } else {
        current++;
    }

    if (currentRight + 1 == dl) { //справа
        currentRight = 0;
    } else {
        currentRight++;
    }

    if (currentLeft + 1 == dl) { //cлева
        currentLeft = 0;
    } else {
        currentLeft++;
    }

    presentation2();
    textCreat2();
}

$(document).ready(function() {
    createImg2();
    presentation2();
});
