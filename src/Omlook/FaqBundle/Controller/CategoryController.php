<?php

namespace Omlook\FaqBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Omlook\FaqBundle\Entity\QuestionCategory;
use Omlook\FaqBundle\Form\QuestionCategoryType;

class CategoryController extends Controller
{
	/**
	 * @Template()
	 */
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
		$cats = $em->getRepository('OmlookFaqBundle:QuestionCategory')->findAll();
		
    	return array('cats' => $cats);
    }

    /**
     * @Template()
     */
    public function createAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$request = $this->getRequest();
    	
    	$cat = new QuestionCategory();
    	$form = $this->createForm(new QuestionCategoryType(), $cat);
    	
    	if ($request->getMethod() == 'POST') {
    		$form->bind($request);
    		if ($form->isValid()) {
    			$em->persist($cat);
    			$em->flush();
    			
    			$this->get('session')->getFlashBag()->add('cat_success', 'The new category is created successfully.');
    			$url = $this->generateUrl('category_index');
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
    	$cat = $em->getRepository('OmlookFaqBundle:QuestionCategory')->find($id);
    	 
    	if (!$cat){
    		throw $this->createNotFoundException('No category found for id '.$id);
    	}
    	
    	$form = $this->createForm(new QuestionCategoryType(), $cat);
    	
    	if ($request->getMethod() == 'POST') {
    		$form->bind($request);
    		if ($form->isValid()) {
    			$em->persist($cat);
    			$em->flush();
    			
    			$this->get('session')->getFlashBag()->add('cat_success', 'The category is updated successfully.');
    			$url = $this->generateUrl('category_index');
    			return $this->redirect($url);
    		}
    	}
    	
    	return array('cat' => $cat, 'form' => $form->createView());
    }

    /**
     * @Template()
     */
    public function deleteAction()
    {
    	$request = $this->getRequest();
    	$id = $request->get('id');
    	
    	$em = $this->getDoctrine()->getManager();
    	$cat = $em->getRepository('OmlookFaqBundle:QuestionCategory')->find($id);
    	
    	if (!$cat){
    		throw $this->createNotFoundException('No category found for id '.$id);
    	}
    	
    	$em->remove($cat);
    	$em->flush();

    	$this->get('session')->getFlashBag()->add('cat_success', 'The category is deleted successfully.');
    	$url = $this->generateUrl('category_index');
    	return $this->redirect($url);
    }

}
