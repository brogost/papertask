<?php
/**
 * Created by PhpStorm.
 * User: antiprovn
 * Date: 9/19/14
 * Time: 9:37 AM
 */

namespace User\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class RegisterController extends AbstractActionController{

    public function indexAction(){
        return new ViewModel();
    }

    public function employerAction(){
        return new ViewModel();
    }

    public function freelancerAction(){
        return new ViewModel();
    }
}