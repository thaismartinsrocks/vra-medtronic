<?php

class Module
{
    private static $allowed = array(
        'medicos' => array('name' => 'Médicos', 'model' => 'Doctor'),
        'emails' => array('name' => 'Emails Cadastrados', 'model' => 'Email'),
        'cidades' => array('name' => 'Cidades', 'model' => 'City'),
    );

    public static function checkIsAllowModule($module)
    {
        if(!self::isAllowModule($module))
            self::setNotFound();
    }

    public static function setNotFound()
    {
        Flight::notFound();
        Flight::stop();
    }

    public static function getModel($module)
    {
        if(self::isAllowModule($module))
        {
            $data = self::$allowed[$module];
            return Model::factory($data['model']);
        }
    }

    private static function isAllowModule($neddleModel)
    {
        foreach(self::$allowed as $module => $values)
        {
            if($module == $neddleModel)
                return true;
        }

        return false;
    }
}