<?php

namespace Planning\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PlanningUserBundle extends Bundle {
    public function getParent(){
        return 'FOSUserBundle';
    }
}
