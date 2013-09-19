<?php

namespace GoalioRememberMe\Controller;

use Zend\Mvc\Controller\AbstractActionController;
class RememberMeController extends AbstractActionController
{

    /**
     * User page
     */
    public function rememberMeAction()
    {
        
        if ($this->zfcUserAuthentication()->hasIdentity()) {
            $rememberMe = $this->getServiceLocator()->get('goaliorememberme_rememberme_service');
            $rememberMe->createSerie($this->zfcUserAuthentication()->getIdentity()->getId());
            // Reference for weak login. Should not be allowed to change PW etc.
            $session = new \Zend\Session\Container('zfcuser');
            $session->offsetSet("cookieLogin", true);
        }        
        if($this->params()->fromQuery('redirect'))
            return $this->redirect()->toUrl($this->params()->fromQuery('redirect'));
        return $this->redirect()->toRoute('home');
       
    }

}
