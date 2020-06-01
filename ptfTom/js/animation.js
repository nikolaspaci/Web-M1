$('#labelScolaire').click(function (evt) {
    if(positionSlide==0){
        return false;
    }
    positionSlide=0
    $('#scolaire').toggle('slide', {direction: 'left'}, 'slow');
    $('#professionel').toggle('slide', {direction: 'right'}, 'slow');
});

$('#labelProfessionnel').click(function (evt) {
    if(positionSlide==1){
        return false;
    }
    positionSlide=1
    $('#labelProfessionnel').click(false);
    $('#scolaire').toggle('slide', {direction: 'left'}, 'slow');
    $('#professionel').toggle('slide', {direction: 'right'}, 'slow');
});

$('#professionel').hide();
var positionSlide=0;