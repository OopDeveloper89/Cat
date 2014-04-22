<?php

namespace Cat\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class which house the logic for building the login form.
 *
 * @author oopdeveloper89
 */
class LoginType extends AbstractType {
	
	const FORM_NAME = 'login';
	
	/**
	 * (non-PHPdoc)
	 * @see \Symfony\Component\Form\AbstractType::buildForm()
	 */
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$checkBoxRememberMeOptions = array(
			'label' => 'Remember me',
			'required' => false
		);
		
		$builder
		->add ( 'email', 'email' )
		->add ( 'password', 'password' )
		->add ( 'rememberMe', 'checkbox', $checkBoxRememberMeOptions )
		->add ( 'save', 'submit' );
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \Symfony\Component\Form\FormTypeInterface::getName()
	 */
	public function getName() {
		return self::FORM_NAME;
	}
}