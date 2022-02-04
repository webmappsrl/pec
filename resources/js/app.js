require('./bootstrap');

window.tabApp = () => {
    return { 
        tab: window.location.hash ? window.location.hash.substring(1) : 'details',
    }
}

window.flash = message => window.dispatchEvent( new CustomEvent('flash', {detail: message}));

$(document).ready(function () {
    jQuery('.poi-list .grid').each(function(index) {
        $(this).on("mouseover", function(){
            var markerr = $('.'+$(this).attr('id'));
            markerr.css("box-shadow","0px 0px 10px 3px red");
        });
        $(this).on("mouseout", function(){
            var markerr = $('.'+$(this).attr('id'));
            markerr.css("box-shadow","none");
        });
    });
});