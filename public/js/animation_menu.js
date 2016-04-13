var iconmenu = document.querySelector('.iconmenu');
var lienIconMenu = document.querySelector('.lienIconMenu');
var nav = document.querySelector('nav');
var headerNavigation = document.querySelector('.headerNavigation');
var truc = false;
$(lienIconMenu).click(function(e){
    e.preventDefault();

    if(truc == false) {
        truc = true;
        setTimeout(function(){
            $(nav).animate({
                width: "456px"
            }, 500);
        }, 500);

        setTimeout(function () {
            $(headerNavigation).fadeIn(1000);
        }, 1000);

    }else if(truc == true){
        truc = false;
        $(headerNavigation).fadeOut(500);

        setTimeout(function(){
            $(nav).animate({
                width: "0px"
            }, 500);
        }, 500);
    }
});