<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonAdmin for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Controller;

use Zend\View\Model\ViewModel;

use Application\Controller\AbstractActionController;

class FreelancerController extends AbstractActionController
{
    protected $requiredLogin = true;

    public function indexAction(){
        return new ViewModel();
    }

    public function finishRegistrationAction()
    {
        return new ViewModel(array(
            "user" => $this->getCurrentUser(),
        ));
    }

    public function updateInfoAction(){
        return $this->finishRegistrationAction();
    }
}
