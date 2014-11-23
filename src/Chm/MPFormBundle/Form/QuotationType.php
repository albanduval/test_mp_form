<?php

namespace Chm\MPFormBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class QuotationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('size', 'entity', array(
                    'class'        => 'ChmMPFormBundle:Size',
                    'property'     => 'name',
                    'expanded'     => true,
                    'multiple'     => false,
                    'widget_type' => 'inline-btn',
                    'attr'  => array(
                        'class' => 'btn btn-primary',
                        ),
                ))
            ->add('color', 'entity', array(
                    'class'     => 'ChmMPFormBundle:Color',
                    'property'  => 'name',
                    'expanded'     => true,
                    'multiple'     => false,
                    'widget_type' => 'inline-btn',
                    'attr'  => array(
                        'class' => 'btn btn-primary',
                        ),
                ))
            ->add('quantity', 'integer')
            ->add('front_color_count', 'integer')
            ->add('back_color_count', 'integer')
            ->add('user', new UserType(), array(
                    'label_render' => false,
                    'horizontal_input_wrapper_class' => 'col-lg-12',
                    'horizontal_label_offset_class' => '',
                ))
            ->add('submit', 'submit', array(
                    'label' => 'Recevoir le devis',
                    'attr' => array(
                        'class' => 'btn-primary'
                        )
                ))
            ;
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Chm\MPFormBundle\Entity\Quotation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'chm_mpformbundle_quotation';
    }
}
