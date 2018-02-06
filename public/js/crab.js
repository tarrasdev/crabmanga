var readerIndex = 1;

showImage(readerIndex);

function addImage(n) {
    showImage(readerIndex += n);
}

function showImage(n) {
    var slide = document.getElementsByClassName('pages');
    if (n > slide.length) {
        readerIndex = 1;
    }
    if (n < 1) {
        readerIndex = slide.length;
    }
    for (i=0; i < slide.length; i++) {
        slide[i].style.display = 'none';
    }
    slide[readerIndex - 1].style.display = 'block';
}
