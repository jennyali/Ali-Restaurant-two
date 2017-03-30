
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
//--- Functions ---
//var $siteBody = $('#site-body');


/*===========================
        CONTROLLER
=============================*/

//--- Functions ---

//if (vars['page'] == 'menu') {
  // $siteBody.addClass('menu-body');
//}

//if (vars['page'] == 'order') {
  //  $siteBody.addClass('menu-order');
//}



