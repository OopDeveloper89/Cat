<?php

namespace Cat\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User {
	
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="firstname", type="string", length=20)
     */
    protected $firstName;
    
    /**
     * @ORM\Column(name="lastname", type="string", length=20)
     */
    protected $lastName;
    
    /**
     * @ORM\Column(type="string", length=1)
     */
    protected $gender;
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $email;

    /**
     * @ORM\Column(name="pw", type="string", length=100)
     */
    protected $password;

    /**
     * @ORM\Column(name="birthdate", type="datetime")
     */
    protected $birthDate;
    
    /**
     * @ORM\Column(name="register_date", type="datetime")
     */
    protected $registerDate;
	
	/**
	 *
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 *
	 * @param int $id        	
	 */
	public function setId($id) {
		$this->id = $id;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getFirstName() {
		return $this->firstName;
	}
	
	/**
	 *
	 * @param string $firstName        	
	 */
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getLastName() {
		return $this->lastName;
	}
	
	/**
	 *
	 * @param string $lastName        	
	 */
	public function setLastName($lastName) {
		$this->lastName = $lastName;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getGender() {
		return $this->gender;
	}
	
	/**
	 *
	 * @param string $gender        	
	 */
	public function setGender($gender) {
		$this->gender = $gender;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 *
	 * @param string $email        	
	 */
	public function setEmail($email) {
		$this->email = $email;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getPassword() {
		return $this->password;
	}
	
	/**
	 *
	 * @param string $password        	
	 */
	public function setPassword($password) {
		$this->password = $password;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getBirthDate() {
		return $this->birthDate;
	}
	
	/**
	 *
	 * @param unknown_type $birthDate        	
	 */
	public function setBirthDate($birthDate) {
		$this->birthDate = $birthDate;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getRegisterDate() {
		return $this->registerDate;
	}
	
	/**
	 *
	 * @param unknown_type $registerDate        	
	 */
	public function setRegisterDate($registerDate) {
		$this->registerDate = $registerDate;
	}
}