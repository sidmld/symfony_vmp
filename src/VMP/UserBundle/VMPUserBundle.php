<?php

namespace VMP\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class VMPUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
