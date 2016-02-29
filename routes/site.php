<?php

Flight::route('/(@module:[A-Za-z]+)', function($module){

    if(!$module)
        $module = 'home';

    Flight::render(SITE_PATH . 'modules/' . $module, null, 'content');
    View::generateSiteContent();
});

Flight::map('notFound', function(){
    echo 'PAGE 404'; // TODO error page
});