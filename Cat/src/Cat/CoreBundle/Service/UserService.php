<?php 

namespace Cat\CoreBundle\Service;

use Cat\CoreBundle\Entity\User;
use Doctrine\ORM\EntityManager;

/**
 * 
 * @author oopdeveloper89
 */
class UserService {
	
	/**
	 * @var EntityManager
	 */
	private $entityManager;
	
	/**
	 * @author oopdeveloper89
	 * @param EntityManager $entityManager
	 */
	public function __construct(EntityManager  $entityManager) {
		$this->entityManager = $entityManager;
	}
	
	/**
	 * @author oopdeveloper89
	 * @param string $email
	 * @param string $password
	 * @return boolean
	 */
	public function authenticateUser ($email, $password) {
		$entityManager = $this->getEntityManager();

		$user = $entityManager
				->getRepository('CatCoreBundle:User')
				->findOneBy(
					array(
						'email' => $email,
						'password' => $password
					));
		
		$isAuthenticated = true;
		if ($user === null) {
			$isAuthenticated = false;
		}
		
		return $isAuthenticated;
	}
	
	/**
	 * @author oopdeveloper89
	 * @return EntityManager
	 */
	public function getEntityManager() {
		return $this->entityManager;
	}
	
	
}