<?php

namespace GoalioRememberMe\Authentication\Adapter;

use DateTime;
use Zend\Authentication\Result as AuthenticationResult;
use Zend\ServiceManager\ServiceManagerAwareInterface;
use Zend\ServiceManager\ServiceManager;
use Zend\Crypt\Password\Bcrypt;
use ZfcUser\Authentication\Adapter\AdapterChainEvent as AuthEvent;
use ZfcUser\Mapper\User as UserMapperInterface;
use ZfcUser\Options\AuthenticationOptionsInterface;
use ZfcUser\Authentication\Adapter\Db as ZfcUserDb;
use Nette\Diagnostics\Debugger;

class Db extends ZfcUserDb
{

    public function authenticate(AuthEvent $e)
    {
        try {
            parent::authenticate($e);
            //esto no puede suceder ya que este error no nos deja validar el usuario mas adelante por eso hacemos esto
        } catch(\Zend\Crypt\Password\Exception\RuntimeException $e) {
        	
        }
    }

}
