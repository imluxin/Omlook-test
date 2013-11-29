<?php

namespace Omlook\FaqBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
	/**
	 * @Template();
	 */
    public function indexAction()
    {
    	$request = $this->getRequest();
    	$em = $this->getDoctrine()->getManager();
    	
    	$cats = $em->getRepository('OmlookFaqBundle:QuestionCategory')->findAll();
    	$qts = $em->getRepository('OmlookFaqBundle:Question')->findBy(array(), null, '6');
    	
        return array('cats' => $cats, 'qts' => $qts);
    }
    
    /**
     * @Template()
     */
    public function categoryAction()
    {
    	$request = $this->getRequest();
    	$em = $this->getDoctrine()->getManager();

    	$cats = $em->getRepository('OmlookFaqBundle:QuestionCategory')->findAll();
    	$id = $request->get('id');
    	
    	if ($id == 'all') {
    		$cat_name = 'All';
    		$qts = $em->getRepository('OmlookFaqBundle:Question')->findBy(array('visible' => true));
    	}else{
	    	$cat = $em->getRepository('OmlookFaqBundle:QuestionCategory')->find($id);
	    	$cat_name = $cat->getName();
	    	$qts = $em->getRepository('OmlookFaqBundle:Question')->findBy(array('category' => $cat, 'visible' => true));
	    }
    	
    	return array('qts' => $qts, 'cat_name' => $cat_name, 'cats' => $cats);
    }
}
