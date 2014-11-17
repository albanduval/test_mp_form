<?php

namespace Chm\MPFormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Chm\MPFormBundle\Entity\Quotation;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$quotation = new Quotation();

        $form = $this->createFormBuilder($quotation)
            ->add('size', 'entity', array(
				    'class'     => 'ChmMPFormBundle:Size',
				    'property'  => 'name',
				    'expanded'  => true,
				    'multiple'  => false,
				))
            ->add('color', 'entity', array(
				    'class'     => 'ChmMPFormBundle:Color',
				    'property'  => 'name',
				    'expanded'  => true,
				    'multiple'  => false,
				))
            ->add('quantity', 'integer')
            ->add('front_color_count', 'integer')
            ->add('back_color_count', 'integer')
            ->add('email', 'email')
            ->add('save', 'submit', array('label' => 'Request a quotation'))
            ->getForm();

        return $this->render('ChmMPFormBundle:Default:index.html.twig', array(
        	'form' => $form->createView(),
        	));
    }
}
