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
 * Controlador donaciones/
*/
class donacionesController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router);
        $this->template->display('donaciones/donaciones',array(
            'page_title' => 'Dona hoy a Ocrend',
            'page_description' => 'Nos enorgullece que Ocrend Framework sea un proyecto open source. Ayúdanos a seguir realizando éste trabajo para tí y toda la comunidad de programadores.'
        ));
    }
}