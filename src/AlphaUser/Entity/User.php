<?php

namespace AlphaUser\Entity;

use Doctrine\ORM\Mapping as ORM;
use AlphaUserBase\Entity\AlphaUserBase;

/**
 * @ORM\Entity
 */
class User extends AlphaUserBase {

    public function __construct() {
        parent::__construct();
    }

}
