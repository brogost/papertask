<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link       for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace User\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $objectManage = $this
            ->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');

        $user = new \User\Entity\User();
        $user->setFullname('Some greate developer Hat');

        $objectManage->persist($user);
        $objectManage->flush();

        die('Hello there' . $user->getId());

        return new ViewModel();
    }
}
