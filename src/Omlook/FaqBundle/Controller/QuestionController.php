<?php

namespace Omlook\FaqBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Omlook\FaqBundle\Entity\Question;
use Omlook\FaqBundle\Form\QuestionType;

class QuestionController extends Controller
{
	/**
     * @Template()
     */
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$questions = $em->getRepository('OmlookFaqBundle:Question')->findAll();
    	return array('questions' => $questions);
    }

    /**
     * @Template()
     */
    public function createAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$request = $this->getRequest();
    	
    	$qt = new Question();
    	$form = $this->createForm(new QuestionType(), $qt);
    	
    	if ($request->getMethod() == 'POST') {
    		$form->bind($request);
    		if ($form->isValid()) {
    			$em->persist($qt);
    			$em->flush();
    			
    			$this->get('session')->getFlashBag()->add('qt_success', 'The new question is created successfully.');
    			$url = $this->generateUrl('question_index');
    			return $this->redirect($url);
    		}
    	}
    	
    	return array('form' => $form->createView());
    }

    /**
     * @Template()
     */
    public function editAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$request = $this->getRequest();

    	$id = $request->get('id');
    	$qt = $em->getRepository('OmlookFaqBundle:Question')->find($id);
    	 
    	if (!$qt){
    		throw $this->createNotFoundException('No question found for id '.$id);
    	}
    	
    	$form = $this->createForm(new QuestionType(), $qt);
    	
    	if ($request->getMethod() == 'POST') {
    		$form->bind($request);
    		if ($form->isValid()) {
    			$em->persist($qt);
    			$em->flush();
    			
    			$this->get('session')->getFlashBag()->add('qt_success', 'The question is updated successfully.');
    			$url = $this->generateUrl('question_index');
    			return $this->redirect($url);
    		}
    	}
    	
    	return array('qt' => $qt, 'form' => $form->createView());
    }

    /**
     * @Template()
     */
    public function deleteAction()
    {
    	$request = $this->getRequest();
    	$id = $request->get('id');
    	
    	$em = $this->getDoctrine()->getManager();
    	$qt = $em->getRepository('OmlookFaqBundle:Question')->find($id);
    	
    	if (!$qt){
    		throw $this->createNotFoundException('No question found for id '.$id);
    	}
    	
    	$em->remove($qt);
    	$em->flush();

    	$this->get('session')->getFlashBag()->add('qt_success', 'The question is deleted successfully.');
    	$url = $this->generateUrl('question_index');
    	return $this->redirect($url);
    }

}
