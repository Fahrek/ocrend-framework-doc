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
 * Controlador generador/
*/
class generadorController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router);
        $this->template->display('generador/generador',array(
            'page_title' => 'Generador de código PHP',
            'page_description' => 'Es un script escrito en PHP orientando su uso a la consola para crear controladores, modelos, vistas ( a corde al diseño del sitio web ) y ficheros javascript para conectarse con ajax a la api restfull.'
        ));
    }
}