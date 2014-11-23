<?php

namespace Chm\MPFormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Chm\MPFormBundle\Entity\Quotation;
use Chm\MPFormBundle\Form\QuotationType;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
    	$quotation = new Quotation();

        $form = $this->createForm(new QuotationType(), $quotation, array(
		    'action' => $this->generateUrl('chm_mp_form_homepage'),
		    'method' => 'POST',
		));

        $form->handleRequest($request);

        if($form->isValid()) {
		    $em = $this->getDoctrine()->getManager();
		    $em->persist($quotation);
		    $em->flush();
        }

        return $this->render('ChmMPFormBundle:Default:index.html.twig', array(
        	'form' => $form->createView(),
        	));
    }
}
