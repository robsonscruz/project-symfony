<?php
namespace Acme\StoreBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class User
{
	/**
	 * @MongoDB\Id
	 */
	protected $id;

	/**
	 * @MongoDB\String
	 */
	protected $name;

	/**
	 * @MongoDB\String
	 */
	protected $email;

	/**
	 * @MongoDB\String
	 */
	protected $password;

	/**
	 * @MongoDB\Boolean
	 */
	protected $admin;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Get password
     *
     * @return string $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set admin
     *
     * @param boolean $admin
     * @return self
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
        return $this;
    }

    /**
     * Get admin
     *
     * @return boolean $admin
     */
    public function getAdmin()
    {
        return $this->admin;
    }
}
