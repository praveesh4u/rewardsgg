<?php

namespace AppBundle\EventListener;

use Sonata\AdminBundle\Event\ConfigureMenuEvent;

class MenuBuilderListener
{
    public function addMenuItems(ConfigureMenuEvent $event)
    {
        $menu = $event->getMenu();

        $child = $menu->addChild('Logout', array(
            'route' => 'fos_user_security_logout',
        ));

        $child->setLabel('Logout');
    }
}