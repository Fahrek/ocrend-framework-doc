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
 * Controlador controladores/
*/
class controladoresController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router);
        $this->template->display('controladores/controladores',array(
            'page_title' => 'Controladores',
            'page_description' => 'Los controladores son una parte fundamental a la hora de crear páginas dentro de la aplicación.'
        ));
    }
}