<?php
/**
 * Created by PhpStorm.
 * User: bcs
 * Date: 19/02/2018
 * Time: 18:51
 */

namespace App;


use SON\Init\Bootstrap;

class Route extends Bootstrap
{
    protected function initRoutes()
    {
        $routes['home'] = array("route"=>'/',"controller"=>"indexController","action"=>"index");
        $routes['contact'] = array("route"=>'/contact',"controller"=>"indexController","action"=>"contact");
        $this->setRoute($routes);
    }
}