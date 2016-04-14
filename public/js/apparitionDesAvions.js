var secondBloc =document.querySelector('#secondBloc');
var blocCascade1 = document.querySelector('.blocCascade1');
var blocCascade2 = document.querySelector('.blocCascade2');
var blocCascade3 = document.querySelector('.blocCascade3');
var blocCascade4 = document.querySelector('.blocCascade4');
var blocCascade5 = document.querySelector('.blocCascade5');
var truc = false;

$('.avion, .ghost-button').click(function(e){
    e.preventDefault();

    if(truc == false) {
        truc = true;
        $(secondBloc).fadeIn(1000);
        $(blocCascade1).fadeIn(1000);
        $(blocCascade2).fadeIn(1000);
        $(blocCascade3).fadeIn(1000);
        $(blocCascade4).fadeIn(1000);
        $(blocCascade5).fadeIn(1000);

        $(blocCascade1).animate({
            height: "100%"
        }, 1000);

        $(blocCascade2).animate({
            height: "100%"
        }, 800);

        $(blocCascade3).animate({
            height: "100%"
        }, 600);

        $(blocCascade4).animate({
            height: "100%"
        }, 400);

        $(blocCascade5).animate({
            height: "100%"
        }, 200);
    }else if(truc == true){
        $(blocCascade1).animate({
            height: "0%"
        }, 1000);

        $(blocCascade2).animate({
            height: "0%"
        }, 800);

        $(blocCascade3).animate({
            height: "0%"
        }, 600);

        $(blocCascade4).animate({
            height: "0%"
        }, 400);

        $(blocCascade5).animate({
            height: "0%"
        }, 200);

        $(secondBloc).fadeOut(500);
        truc = false;
    }
});