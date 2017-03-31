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
//--- Selectors ---
var $menuList = $('.menu-block');


/*===========================
        CONTROLLER
=============================*/

//--- Functions ---

function scrollTo(selector){             // scroll up effect
    $('body').animate({
        scrollTop: selector.offset().top -0
    }, 1000);
};

if (vars['category'] == 'pizza') {
    scrollTo($menuList);
}

if (vars['category'] == 'pasta') {
    scrollTo($menuList);
}

if (vars['category'] == 'panini') {
    scrollTo($menuList);
}
