<?php

/**
 * BjyAuthorize Module (https://github.com/bjyoungblood/BjyAuthorize)
 *
 * @link https://github.com/bjyoungblood/BjyAuthorize for the canonical source repository
 * @license http://framework.zend.com/license/new-bsd New BSD License
 */

namespace AlphaUser\Entity;

use AlphaUserBase\Entity\AlphaUserBase;

/**
 * An example of how to implement a role aware user entity.
 *
 * @ORM\Entity
 * @ORM\Table(name="users_sub")
 *
 * @author Tom Oram <tom@scl.co.uk>
 */
class User extends AlphaUserBase { }
