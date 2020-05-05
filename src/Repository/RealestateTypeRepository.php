<?php

namespace App\Repository;

use App\Entity\RealestateType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RealestateType|null find($id, $lockMode = null, $lockVersion = null)
 * @method RealestateType|null findOneBy(array $criteria, array $orderBy = null)
 * @method RealestateType[]    findAll()
 * @method RealestateType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RealestateTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RealestateType::class);
    }

    // /**
    //  * @return RealestateType[] Returns an array of RealestateType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RealestateType
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
