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
var $menuList = $('#menu-block');


/*===========================
        CONTROLLER
=============================*/

if (vars['category'] == 'pizza') {
    window.location.hash = '#menu-block';
}

if (vars['category'] == 'pasta') {
    window.location.hash = '#menu-block';
}

if (vars['category'] == 'panini') {
    window.location.hash = '#menu-block';
}
