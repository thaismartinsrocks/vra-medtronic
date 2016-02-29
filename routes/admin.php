<?php

Flight::route('/admin', function(){

    if(!Oauth::isLogged())
        Flight::redirect( ADMIN_PATH . '/login');

    $args['emails'] = Model::factory('Email')->orderByDesc('id')->limit(5)->findMany();
    $args['doctors'] = Model::factory('Doctor')->orderByDesc('id')->limit(5)->findMany();

    Flight::render(ADMIN_PATH . 'modules/dashboard', $args, 'content');
    View::generateAdminContent();
});

Flight::route('/admin/login', function(){

    if(Oauth::isLogged())
        Flight::redirect( ADMIN_PATH . '/');

    Flight::render(ADMIN_PATH . 'modules/login', null, 'content');
    Flight::render(ADMIN_PATH . 'partials/head', array('title' => View::$adminTitle), 'head');
    Flight::render(ADMIN_PATH . 'partials/footer', null, 'footer');
    Flight::render(ADMIN_PATH . 'layout', null);
});

Flight::route('POST /admin/oauth', function(){

    $request = Flight::request()->data;

    $user = Text::sanitizeString($request->user);
    $pass = Text::sanitizeString($request->pass);

    echo Oauth::doLogin($user, $pass);
});

Flight::route('POST /admin/oauth/logout', function(){

    Oauth::doLogout();
    Flight::redirect( ADMIN_PATH . '/login');
});

Flight::route('/admin/@module:[A-Za-z]+', function($module) {

    if(!Oauth::isLogged())
        Flight::redirect( ADMIN_PATH . '/login');

    Module::checkIsAllowModule($module);

    $args['itens'] = Module::getModel($module)->findMany();
    $args['link'] = ADMIN_URL . $module . '/';

    Flight::render(ADMIN_PATH . 'modules/' . $module . '/list', $args, 'content');
    View::generateAdminContent();
});

Flight::route('GET /admin/@module:[A-Za-z]+/(new)', function($module){

    if(!Oauth::isLogged())
        Flight::redirect( ADMIN_PATH . '/login');

    Module::checkIsAllowModule($module);

    $args['item'] = Module::getModel($module)->create();
    $args['states'] = Model::factory('State')->findMany();
    $args['cities'] = Model::factory('City')->findMany();
    $args['link'] = ADMIN_URL . $module . '/';

    Flight::render(ADMIN_PATH . 'modules/' . $module . '/form', $args, 'content');
    View::generateAdminContent();
});

Flight::route('POST /admin/@module:[A-Za-z]+/(new)', function($module){

    if(!Oauth::isLogged())
        Flight::redirect( ADMIN_PATH . '/login');

    Module::checkIsAllowModule($module);

    $request = Flight::request()->data;
    $item = Module::getModel($module)->create();

    foreach($request as $key => $value) {
        $item->$key = $value;
    }

    if($item->save())
        Flight::redirect(ADMIN_URL . $module . '/edit/' . $item->id());

});

Flight::route('GET /admin/@module:[A-Za-z]+/(edit)/@id:[0-9]{1,3}', function($module, $id) {

    if(!Oauth::isLogged())
        Flight::redirect( ADMIN_PATH . '/login');

    Module::checkIsAllowModule($module);

    $args['item'] = Module::getModel($module)->findOne($id);

    if(!$args['item'])
        Module::setNotFound();

    $args['states'] = Model::factory('State')->findMany();
    $args['cities'] = Model::factory('City')->findMany();
    $args['link'] = ADMIN_URL . $module . '/';

    Flight::render(ADMIN_PATH . 'modules/' . $module . '/form', $args, 'content');
    View::generateAdminContent();
});

Flight::route('POST /admin/@module:[A-Za-z]+/(edit)/@id:[0-9]{1,3}', function($module, $id) {

    if(!Oauth::isLogged())
        Flight::redirect( ADMIN_PATH . '/login');

    Module::checkIsAllowModule($module);

    $request = Flight::request()->data;
    $args['item'] = Module::getModel($module)->findOne($id);

    if(!$args['item'])
        Module::setNotFound();

    foreach($request as $key => $value) {
        $args['item']->$key = $value;
    }

    if($args['item']->save())
        Flight::redirect(ADMIN_URL . $module . '/edit/' . $args['item']->id);
});

Flight::route('/admin/@module:[A-Za-z]+/(delete)/@id:[0-9]{1,3}', function($module, $id) {

    if(!Oauth::isLogged())
        Flight::redirect( ADMIN_PATH . '/login');

    Module::checkIsAllowModule($module);

    $request = Flight::request()->data;
    $item = Module::getModel($module)->findOne($id);

    if($item->delete())
        Flight::redirect(ADMIN_URL . $module . '/');
});