<?php

namespace Chm\MPFormBundle\Form;

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
            ->add('email', 'text', array(
                    'label' => 'E-mail',
                    ))
            ->add('name', 'text', array(
                    'label' => 'Nom',
                    ))
            ->add('firstname', 'text', array(
                    'label' => 'Prénom',
                    ))
            ->add('address1', 'text', array(
                    'label'    => 'Adresse',
                    'required' => false,
                    ))
            ->add('address2', 'text', array(
                    'label'    => 'Adresse (suite)',
                    'required' => false,
                    ))
            ->add('zip_code', 'text', array(
                    'required' => false,
                    ))
            ->add('city', 'text', array(
                    'required' => false,
                    ))
            ->add('country', 'text', array(
                    'required' => false,
                    ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Chm\MPFormBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'chm_mpformbundle_user';
    }
}
