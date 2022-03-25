<?php


namespace App\Utils;


/**
 * Class ViewHandler
 * @package App\Utils
 */
class ViewHandler
{
    /**
     * Requires a view located in $view
     *
     * @param  string  $view   view name
     * @param  array   $data   data presented in view
     */

    /**
     * The idea is that $data works as a dictionary, whoever uses it or creates new controllers/views
     * must assemble the dictionary and use the corresponding keys. It is a structure similar to Laravel
     */
    public static function processView($view, $data)
    {

        require '../app/views/' . 'Header' . '.php';
        require '../app/views/' . $view . '.php';
        require '../app/views/' . 'Footer' . '.php';


    }
}