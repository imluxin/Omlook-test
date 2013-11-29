<?php
// src/Gws/FrontBundle/Twig/GwsExtension.php
namespace Omlook\FaqBundle\Twig;

use Symfony\Component\HttpFoundation\Request;

class LxExtension extends \Twig_Extension
{
	protected $request;
	
	/**
	 *
	 * @var \Twig_Environment
	 */
	protected $environment;

	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	public function initRuntime(\Twig_Environment $environment)
	{
		$this->environment = $environment;
	}
	
	public function getFunctions()
	{
		return array(
				'get_action_name' => new \Twig_Function_Method($this, 'getActionName'),
				'get_controller_name' => new \Twig_Function_Method($this, 'getControllerName'),
		);
	}

	/**
	 * Get current action name
	 */
	public function getActionName()
	{
		$pattern = "#::([a-zA-Z]*)Action#";
		$matches = array();
		preg_match($pattern, $this->request->get('_controller'), $matches);
		 
		return $matches['1'];
	}

	/**
	 * Get current controller name
	 */
	public function getControllerName()
	{
		$pattern = "#Controller\\\([a-zA-Z]*)Controller#";
		$matches = array();
		preg_match($pattern, $this->request->get('_controller'), $matches);
		return strtolower($matches['1']);
	}
	


	public function getName()
	{
		return 'lx_extension';
	}
	
}