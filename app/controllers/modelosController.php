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
 * Controlador modelos/
*/
class modelosController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router);

        switch($this->method) {
            case 'caracteristicas':
                switch($router->getId()) {
                    case 'database':
                        $this->template->display('modelos/caracteristicas/database',array(
                            'page_title' => 'Característica (Trait) DBModel',
                            'page_description' => 'La característica DBModel es un Trait que se añade como rasgo a aquellos modelos que necesiten de conexión a base de datos.'
                        ));
                    break;
                    default:
                        Helper\Functions::redir();
                    break;
                }
            break;
            default:    
                $this->template->display('modelos/modelos',array(
                    'page_title' => 'Modelos uso y creación',
                    'page_description' => 'Los modelos son clases destinadas al manejo de la lógica, acciones y son la única entidad que puede realizar una interacción con la base de datos, de acuerdo a la estructura del framework, es la tercera capa de funcionamiento en el flujo MVC.'
                ));
            break;
        }
        
    }
}