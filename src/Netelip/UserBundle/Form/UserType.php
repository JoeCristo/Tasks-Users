<?php

namespace Netelip\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('firstName')
            ->add('lastName')
            ->add('email', 'email')
            ->add('password', 'password')
            ->add('role', 'choice', ['choices' => ['ROLE_ADMIN' => 'Administrador', 
                'ROLE_USER' => 'Usuario'], 'placeholder' => 'Select a role'])
            ->add('isActive', 'checkbox')
            ->add('save', 'submit', ['label' => 'Save user']);
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Netelip\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName() //NOMBRE DEL FORMULARIO
    {
        return 'user';
    }
}
