<?php

namespace Med\CeliaBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ProduitRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProduitRepository extends EntityRepository
{
    public function findAllByLatest()
    {
        return $this->findBy(array(), array('id' => 'DESC'));
    }
}
