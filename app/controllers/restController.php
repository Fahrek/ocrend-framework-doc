<?php

/*
 * This file is part of the Ocrend Framewok 3 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace app\controllers;

use app\models as Model;
use Ocrend\Kernel\Helpers as Helper;
use Ocrend\Kernel\Controllers\Controllers;
use Ocrend\Kernel\Controllers\IControllers;
use Ocrend\Kernel\Router\IRouter;

/**
 * Controlador rest/
*/
class restController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router);
        $this->template->display('rest/rest',array(
            'page_title' => 'API RESTFULL con Silex',
            'page_description' => 'La API RESTFULL de Ocrend Framework está realizada con Silex, es un microframework desarrollado con PHP. Se basa en los mismos principios de Symfony y Pimple y está inspirado por el microframework Sinatra de Ruby.'
        ));
    }
}