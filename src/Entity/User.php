<?php
// src/Entity/User.php

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();

    }

    /**
     * @ORM\Column(type="string", name="google_id", nullable=true)
     */
    protected $googleId;


   protected $googleAccesToken;

    /**
     * @return mixed
     */
    public function getGoogleAccesToken()
    {
        return $this->googleAccesToken;
    }

    /**
     * @param mixed $googleAccesToken
     */
    public function setGoogleAccesToken($googleAccesToken): void
    {
        $this->googleAccesToken = $googleAccesToken;
    }

    /**
     * @return mixed
     */
    public function getGoogleId()
    {
        return $this->googleId;
    }

    /**
     * @param mixed $googleId
     */
    public function setGoogleId($googleId)
    {
        $this->googleId = $googleId;
    }
}