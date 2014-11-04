<?php

namespace Mesd\AppBundle\Entity;

use Mesd\UserBundle\Entity\Group as BaseGroup;

/**
 * Group
 */
class Group extends BaseGroup
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
