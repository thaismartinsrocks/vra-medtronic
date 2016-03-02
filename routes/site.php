<?php

Flight::route('/(@module:[A-Za-z]+(/@submodule:[A-Za-z]+))', function($module, $submodule){

    if(!$module)
        $module = 'home';

    $args['module'] = $module;

    if($submodule)
        $module .= '/' . $submodule;

    Flight::render(SITE_PATH . 'modules/' . $module, $args, 'content');
    View::generateSiteContent();
});

Flight::map('notFound', function(){
    echo 'PAGE 404'; // TODO error page
});