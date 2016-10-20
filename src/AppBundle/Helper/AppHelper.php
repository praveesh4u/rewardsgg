<?php

namespace AppBundle\Helper;

use Symfony\Component\DependencyInjection\Container;


class AppHelper
{
    /**
     * The service container
     * @var Container
     */
    private $container;

    /**
     * AppHelper constructor.
     * @param Container $container
     */
    public function __construct( Container $container)
    {
        $this->container = $container;

    }


    /**
     * Helper function to return all the Non Super Admin roles from the
     * role hierarchy.
     * @return array
     * @author Praveesh A <praveesh4u@gmail.com>
     */
    public function getExistingRoles()
    {
        $roleHierarchy = $this->container->getParameter('security.role_hierarchy.roles');

        $flatRoles = array();
        foreach($roleHierarchy as $roles) {

            if(empty($roles)) {
                continue;
            }

            foreach($roles as $role) {
                if(!isset($flatRoles[$role])) {
                    $flatRoles[$role] = $role;
                }
            }
        }

        return $flatRoles;

    }

}