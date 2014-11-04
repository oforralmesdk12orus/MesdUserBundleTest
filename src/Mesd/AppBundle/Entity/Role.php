<?php

namespace Mesd\AppBundle\Entity;

use Mesd\UserBundle\Entity\Role as BaseRole;

/**
 * Role
 */
class Role extends BaseRole
{
    /**
     * @var integer
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
