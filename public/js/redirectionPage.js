var body = document.querySelector('body');
var apparitionDiv = document.querySelector('#apparitionDiv');
var lienthunder = document.querySelector('.lienthunder');
var lienouragan = document.querySelector('.lienouragan');
var lienmystere = document.querySelector('.lienmystere');
var lienmagister = document.querySelector('.lienmagister');
var lienalphajet = document.querySelector('.lienalphajet');


$(lienthunder).click(function(e){
    e.preventDefault();
    $(apparitionDiv).show().animate({
        width : "100%"
    }, 1000);

    setTimeout(function(){
        location.href = "/thunderjet";
    }, 1500);
});

$(lienouragan).click(function(e){
    e.preventDefault();
    $(apparitionDiv).show().animate({
        width : "100%"
    }, 1000);

    setTimeout(function(){
        location.href = "/ouragan";
    }, 1500);
});

$(lienmystere).click(function(e){
    e.preventDefault();
    $(apparitionDiv).show().animate({
        width : "100%"
    }, 1000);

    setTimeout(function(){
        location.href = "/mistereiv";
    }, 1500);
});

$(lienmagister).click(function(e){
    e.preventDefault();
    $(apparitionDiv).show().animate({
        width : "100%"
    }, 1000);

    setTimeout(function(){
        location.href = "/magister";
    }, 1500);
});

$(lienalphajet).click(function(e){
    e.preventDefault();
    $(apparitionDiv).show().animate({
        width : "100%"
    }, 1000);

    setTimeout(function(){
        location.href = "/alphajet";
    }, 1500);
});