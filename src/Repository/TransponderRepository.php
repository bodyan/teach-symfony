<?php

namespace App\Repository;

use App\Entity\Transponder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Transponder|null find($id, $lockMode = null, $lockVersion = null)
 * @method Transponder|null findOneBy(array $criteria, array $orderBy = null)
 * @method Transponder[]    findAll()
 * @method Transponder[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransponderRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Transponder::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('t')
            ->where('t.something = :value')->setParameter('value', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
