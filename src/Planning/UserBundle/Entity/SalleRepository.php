<?php

namespace Planning\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * SalleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SalleRepository extends EntityRepository
{
    public function getSalle() 
    {
        return $this->createQueryBuilder('c')->orderBy('c.idsalle', 'ASC');
        
    }
}
