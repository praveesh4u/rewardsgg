<?php

namespace AppBundle\Form;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Helper\AppHelper ;

class RegistrationType extends AbstractType
{
    /**
     * The service container
     * @var Container
     */
    private $container;
    private $helper;

    public function __construct( Container $container, AppHelper $helper )
    {
        $this->container = $container;
        $this->helper = $helper;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('roles', 'choice', array(
            'choices' => $this->helper->getExistingRoles(),
            'label' => 'Roles',
            'expanded' => false,
            'multiple' => true,
            'mapped' => true,
            'required' => true,
            'attr' =>array(
                'class' =>'form-control'
            ),
        ));

    }

    public function getParent()
    {

         return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }


    public function getName()
    {
        return $this->getBlockPrefix();
    }


}