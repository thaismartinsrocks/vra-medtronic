<?php

class Menu
{

    public static function generateMenu()
    {
        $menu = '';

        if(Menu::getAll())
        {
            foreach (Menu::getAll() as $name => $module)
            {
                $classes = (str_word_count($name) > 2) ? 'double-line' : '';
                $classes .= (Menu::getCurrentMenu() == $module) ? ' active' : '';

                $menu .= '<li class="' . $classes . '"><a href="' . BASE_URL . $module . '">' . $name . '</a></li>';
            }
        }

        echo $menu;
    }

    public static function generateSubMenu($module)
    {
        $menu = '';
        $submenus = Menu::getSubMenu($module);

        if($submenus)
        {
            foreach ($submenus as $name => $submodule)
            {
                $classes = (Menu::getCurrentSubMenu() == $submodule) ? ' active' : '';

                $menu .= '<li class="' . $classes . '"><a href="' . BASE_URL . $module . '/' . $submodule . '">' . $name . '</a></li>';
            }
        }

        echo $menu;
    }

    public static function getCurrentMenu()
    {
        $route = Flight::router()->current();
        return $route->params['module'];
    }

    public static function getCurrentSubMenu()
    {
        $route = Flight::router()->current();
        return $route->params['submodule'];
    }

    private static function getAll()
    {
        return array(
            'Home' => '',
            'Por que Medtronic' => 'medtronic',
            'Encontre um Médico' => 'medicos',
            'Doença Venosa' => 'doenca',
            'Tratamento' => 'tratamento',
            'Histórias' => 'historias',
            'Contato' => 'contato'
        );
    }

    private static function getSubmenu($module = false)
    {

        $menu = array(
            'doenca' => array(
                'Falando com Seu Médico' => 'falando',
                'Desvendando Mitos' => 'mitos',
                'Perguntas Mais Frequentes' => 'perguntas',
                'Glossário' => 'glossario'
            )
        );

        if(!$module || !isset($menu[$module]))
            return false;

        return $menu[$module];
    }
}