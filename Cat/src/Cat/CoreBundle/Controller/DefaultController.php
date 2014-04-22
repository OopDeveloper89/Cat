<?php

namespace Cat\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {
	public function indexAction($name) {
		return $this->render ( 'CatCoreBundle:Default:index.html.twig', array (
				'name' => $name 
		) );
	}
}
