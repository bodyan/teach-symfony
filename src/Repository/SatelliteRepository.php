<?php


namespace App\Repository;

use App\Entity\Satellite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Satellite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Satellite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Satellite[]    findAll()
 * @method Satellite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SatelliteRepository extends ServiceEntityRepository
{

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Satellite::class);
    }

}