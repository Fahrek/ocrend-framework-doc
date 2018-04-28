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
 * Controlador helpers/
*/
class helpersController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router);

        switch($this->method) {
            case 'arrays':
                $this->template->display('helpers/arrays',array(
                    'page_title' => 'Helper Arrays',
                    'page_description' => 'Helper con funciones útiles para el tratamiento de arreglos.'
                ));
            break;
            case 'emails':
                $this->template->display('helpers/emails',array(
                    'page_title' => 'Helper Emails',
                    'page_description' => 'Helper con funciones útiles para trabajar con evío de correos mediante SwiftMailer.'
                ));
            break;
            case 'files':
                $this->template->display('helpers/files',array(
                    'page_title' => '',
                    'page_description' => ''
                ));
            break;
            case 'strings':
                $this->template->display('helpers/strings',array(
                    'page_title' => '',
                    'page_description' => ''
                ));
            break;
            case 'functions':
                $this->template->display('helpers/functions',array(
                    'page_title' => '',
                    'page_description' => ''
                ));
            break;
            default:
                $this->template->display('helpers/uso',array(
                    'page_title' => 'Helpers uso y creación',
                    'page_description' => 'Un helper es una colección de funciones en una categoría particular, como su nombre lo indica, están destinados a ofrecer ayuda para resolver problemas pequeños.'
                ));
            break;
        }
    }
}