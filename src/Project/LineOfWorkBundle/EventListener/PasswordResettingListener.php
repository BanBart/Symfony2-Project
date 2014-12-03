<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Project\LineOfWorkBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Description of PasswordResettingListener
 *
 * @author SakyHank
 */
class PasswordResettingListener implements EventSubscriberInterface{
    
    private $router;

    public function __construct(UrlGeneratorInterface $router) {
        $this->router = $router;
    }
    
    public static function getSubscribedEvents() {
        return [
            FOSUserEvents::RESETTING_RESET_SUCCESS => 'onPasswordResettingSuccess'
            
        ];
    }
    
    public function onPasswordResettingSuccess(FormEvent $event) {
        $url = $this->router->generate('project_line_of_work_homepage');
        $event->setResponse(new RedirectResponse($url));
    }
    


//put your code here
}
