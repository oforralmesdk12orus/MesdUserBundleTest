<?php

namespace Mesd\AppBundle\Entity;

use Mesd\UserBundle\Entity\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $role;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
