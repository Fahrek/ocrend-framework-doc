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
 * Controlador sobre/
 *
 * @author Ocrend Software C.A <bnarvaez@ocrend.com>
*/
class sobreController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router);
        $this->template->display('home/home',array(
            'page_title' => 'Documentación oficial',
            'page_description' => 'Documentación oficial de Ocrend Framework, Framework MVC Escrito en PHP 7 ideal para principiantes y expertos en desarrollo web con PHP y PDO'
        ));
    }
}