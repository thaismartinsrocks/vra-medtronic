<?php

class State extends Model {

    public static $_table = 'state';
    public static $_id_column = 'id';

    public static function getName($id)
    {
        $state = self::findOne($id);

        if($state)
            return $state->name;
    }

    public static function getAbbreviation($id)
    {
        $state = self::findOne($id);

        if($state)
            return $state->abbreviation;
    }
}