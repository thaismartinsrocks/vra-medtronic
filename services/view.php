<?php

class View
{
    public static $adminTitle = 'Painel Administrativo';
    public static $siteTitle = 'Medtronic';

    private static $modules = array(
        'medicos' => array('name' => 'Médicos', 'model' => 'Doctor'),
        'emails' => array('name' => 'Emails Cadastrados', 'model' => 'Email'),
        'cidades' => array('name' => 'Cidades', 'model' => 'City'),
    );

    public static function generateLoginContent()
    {
        Flight::render(ADMIN_PATH . 'partials/head', array('title' => self::$adminTitle), 'head');
        Flight::render(ADMIN_PATH . 'partials/bottom', null, 'bottom');
        Flight::render(ADMIN_PATH . 'layout', null);
    }

    public static function generateAdminContent()
    {
        Flight::render(ADMIN_PATH . 'partials/head', array('title' => self::$adminTitle), 'head');
        Flight::render(ADMIN_PATH . 'partials/header', null, 'header');
        Flight::render(ADMIN_PATH . 'partials/sidemenu', null, 'sidemenu');
        Flight::render(ADMIN_PATH . 'partials/bottom', null, 'bottom');
        Flight::render(ADMIN_PATH . 'layout', null);
    }

    public static function generateSiteContent()
    {
        Flight::render(SITE_PATH . 'partials/head', array('title' => self::$siteTitle), 'head');
        Flight::render(SITE_PATH . 'partials/header', null, 'header');
        Flight::render(SITE_PATH . 'partials/menu-mobile', null, 'menuMobile');
        Flight::render(SITE_PATH . 'partials/footer', null, 'footer');
        Flight::render(SITE_PATH . 'partials/bottom', null, 'bottom');
        Flight::render(SITE_PATH . 'layout', null);
    }

    public static function isAllowModule($neddleModel)
    {
        foreach(self::$modules as $module => $values)
        {
            if($module == $neddleModel)
                return true;
        }

        return false;
    }

    public static function getModule($neddleModel)
    {
        foreach(self::$modules as $module => $values)
        {
            if($module == $neddleModel)
                return true;
        }

        return false;
    }
}