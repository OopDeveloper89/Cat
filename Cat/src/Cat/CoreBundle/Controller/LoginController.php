<?php 

namespace Cat\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Cat\CoreBundle\Form\LoginType;
use Cat\CoreBundle\Service\UserService;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormError;

class LoginController extends Controller {

	/**
	 * @author oopdeveloper89
	 */
	public function indexAction(Request $request) {
 		$form = $this->createForm(new LoginType());
 		$form->handleRequest($request);
 		
 		if ($form->isValid()) {
 			return $this->loginUser($form);
 		}
 		else {
 			return $this->renderLoginForm($form);
 		}
	}
	
	/**
	 * @author oopdeveloper89
	 */
	public function aboutAction() {
		die('OK');
		$form = $this->createForm(new LoginType());
	
		return $this->render(
				'CatCoreBundle:Login:login.html.twig',
				array(
						'loginform' => $form->createView()
				)
		);
	}
	
	private function renderLoginForm(Form $form) {
		return $this->render(
				'CatCoreBundle:Login:login.html.twig',
				array(
						'loginform' => $form->createView()
				)
		);
	}
	
	private function loginUser(Form $form) {
		// We take the form data...
		$formData = $form->getData();
		$email = $formData['email'];
		$password = $formData['password'];
		
		/* @var $userService UserService */
		$userService = $this->get('user_service');
		$isAuthenticated = $userService->authenticateUser($email, $password);
		
		if ($isAuthenticated) {
			
		}
		else {
			
			return $this->render(
					'CatCoreBundle:Login:login.html.twig',
					array(
							'loginform' => $form->createView(),
							'error' => 'Invalid E-Mail or password.'
					)
			);
		}
	}
}