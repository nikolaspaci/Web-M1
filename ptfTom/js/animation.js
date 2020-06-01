$('#labelScolaire').click(function (evt) {
    if(positionSlide==0){
        return false;
    }
    positionSlide=0
    $('#professionel').hide();
    $('#scolaire').show();
});

$('#labelProfessionnel').click(function (evt) {
    if(positionSlide==1){
        return false;
    }
    positionSlide=1
    $('#scolaire').hide();
    $('#professionel').show();
});

$('#professionel').hide();
var positionSlide=0;