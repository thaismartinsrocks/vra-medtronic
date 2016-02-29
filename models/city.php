<?php

class City extends Model {

    public static $_table = 'city';
    public static $_id_column = 'id';

    public static function getFullName($id)
    {
        $city = self::findOne($id);

        if(!$city)
            return false;

        $state = Model::factory('State')->findOne($city->state_id);

        if($state)
            return $city->name . '/' . $state->abbreviation;
        else
            return $city->name;
    }

}