<?php

namespace Omlook\FaqBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Omlook\FaqBundle\Entity\Answer;
use Omlook\FaqBundle\Form\AnswerType;

class AnswerController extends Controller
{

	/**
	 * @Template()
	 */
    public function viewAction()
    {
    	$request = $this->getRequest();
    	$id = $request->get('q_id');
    	
    	$em = $this->getDoctrine()->getManager();
    	$qt = $em->getRepository('OmlookFaqBundle:Question')->find($id);
    	
    	$aws = $em->getRepository('OmlookFaqBundle:Answer')->findBy(array('question' => $qt));
    	
    	return array('qt' => $qt, 'aws' => $aws);
    }

    /**
     * @Template()
     */
    public function createAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$request = $this->getRequest();
    	$q_id = $request->get('q_id');

    	$qt = $em->getRepository('OmlookFaqBundle:Question')->find($q_id);
    	
    	$aw = new Answer();
    	$form = $this->createForm(new AnswerType(), $aw);
    	
    	if ($request->getMethod() == 'POST') {
    		$form->bind($request);
    		if ($form->isValid()) {
    			$data = $form->getData();
    			
    			$aw->setContent($data->getContent())
    			   ->setQuestion($qt)
    			   ->setUsername($data->getUsername())
    			   ->setVisible($data->getVisible())  
    			;
    			
    			$em->persist($aw);
    			$em->flush();
    			
    			$this->get('session')->getFlashBag()->add('aw_success', 'The new answer is created successfully.');
    			$url = $this->generateUrl('view_answers', array('q_id' => $q_id));
    			return $this->redirect($url);
    		}
    	}
    	
    	return array('form' => $form->createView(), 'qt' => $qt);
    }

    /**
     * @Template()
     */
    public function editAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$request = $this->getRequest();
    	
    	$q_id = $request->get('q_id');
		$a_id = $request->get('a_id');
    	
    	$qt = $em->getRepository('OmlookFaqBundle:Question')->find($q_id);
    	$aw = $em->getRepository('OmlookFaqBundle:Answer')->find($a_id);
    	 
    	if (!$aw){
    		throw $this->createNotFoundException('No answer found for id '.$a_id);
    	}
    	
    	$form = $this->createForm(new AnswerType(), $aw);
    	
    	if ($request->getMethod() == 'POST') {
    		$form->bind($request);
    		if ($form->isValid()) {
    			$data = $form->getData();
    			
    			$aw->setContent($data->getContent())
    			   ->setQuestion($qt)
    			   ->setUsername($data->getUsername())
    			   ->setVisible($data->getVisible())  
    			;
    			$em->persist($aw);
    			$em->flush();
    			
    			$this->get('session')->getFlashBag()->add('aw_success', 'The answer is updated successfully.');
    			$url = $this->generateUrl('view_answers', array('q_id' => $q_id));
    			return $this->redirect($url);
    		}
    	}

    	return array('form' => $form->createView(), 'qt' => $qt, 'aw' => $aw);
    }

    /**
     * @Template()
     */
    public function deleteAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$request = $this->getRequest();
    	
    	$q_id = $request->get('q_id');
		$a_id = $request->get('a_id');
    	
    	$aw = $em->getRepository('OmlookFaqBundle:Answer')->find($a_id);
    	 
    	if (!$aw){
    		throw $this->createNotFoundException('No answer found for id '.$a_id);
    	}
    	
    	$em->remove($aw);
    	$em->flush();

    	$this->get('session')->getFlashBag()->add('aw_success', 'The answer is deleted successfully.');
    	$url = $this->generateUrl('view_answers', array('q_id' => $q_id));
    	return $this->redirect($url);
    }

}
