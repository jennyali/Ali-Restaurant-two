
// Top Site Navigation Scroll To Div Events //


// code snippet to grab a value from a query string URL
//--------------------------------------------------

var vars = [], hash;
var q = document.URL.split('?')[1];
if(q != undefined){
    q = q.split('&');
    for(var i = 0; i < q.length; i++){
        hash = q[i].split('=');
        vars.push(hash[1]);
        vars[hash[0]] = hash[1];
    }
}
//---------------------------------------------------

/*===========================
            VIEW
=============================*/

//-- Selectors --

var $homeAboutSection = $('#home-about-section');
var $pageFooter = $('#page-footer');

/*===========================
        CONTROLLER
=============================*/

//--- Functions ---

function scrollTo(selector){             // scroll up effect
    $('body').animate({
        scrollTop: selector.offset().top -145
    }, 1000);
};

if (vars['scrollto'] == 'about') {
    scrollTo($homeAboutSection);
}

if (vars['scrollto'] == 'contact') {
    scrollTo($pageFooter);
}