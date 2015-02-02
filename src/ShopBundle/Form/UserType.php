<?php

namespace ShopBundle\Form;

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
            ->add('userName')
            ->add('passWord')
            ->add('firstname')
            ->add('lastnam')
            ->add('address')
            ->add('address')
            ->add('housenr')
            ->add('houseadd')
            ->add('phonenumber')
            ->add('email')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ShopBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'shopbundle_user';
    }
}
