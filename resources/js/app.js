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


    // if get parameters exists open success registration alert
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;
    
        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');
    
            if (sParameterName[0] === sParam) {
                return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
        return false;
    };
    var poiID = getUrlParameter('poiid');

    // if (window.location.hash.substring(1)) {
    //     var mapSection = jQuery('.'+window.location.hash.substring(1));
    //     mapSection[0].scrollIntoView()
    // }

    if (poiID) {
        $('#poi-'+poiID).click();
    }
});