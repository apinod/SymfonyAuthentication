<?php

namespace Simple\ProfileBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('address')
            ->add('zipCode', 'text')
            ->add('email', 'email')
            ->add('password', 'repeated', array('type' => 'password',
                                                'first_name' => 'Password',
                                                'second_name' => 'Confirm_Password',
                                                'invalid_message' => 'Passwords do not match'))
            ;//->add('city', 'hidden', array('data' => 'abcdef'));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Simple\ProfileBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'simple_profilebundle_usertype';
    }
}
