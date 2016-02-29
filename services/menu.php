<?php

class Menu
{
    public static function getAll()
    {
        return array(
                'Home' => '',
                'Por que Medtronic' => 'medtronic',
                'Encontre um Médico' => 'medicos',
                'Doença Venosa' => 'doenca-venosa',
                'Tratamento' => 'tratamento',
                'Histórias' => 'historias',
                'Contato' => 'contato'
            );
    }

    public static function generateMenu()
    {
        $menu = '';

        if(Menu::getAll())
        {
            foreach (Menu::getAll() as $name => $module)
            {
                $classes = (str_word_count($name) > 2) ? 'double-line' : '';
                $classes .= (Menu::getCurrentMenu() == '/' . $module) ? ' active' : '';

                $menu .= '<li class="' . $classes . '"><a href="' . BASE_URL . $module . '">' . $name . '</a></li>';
            }
        }

        echo $menu;
    }

    public static function getCurrentMenu()
    {
        $route = Flight::router()->current();
        return $route->pattern;
    }
}