<?php

namespace App\Repository\Personnel;

use App\Entity\Personnel\Habilitation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Habilitation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Habilitation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Habilitation[]    findAll()
 * @method Habilitation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HabilitationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Habilitation::class);
    }

    // /**
    //  * @return Habilitation[] Returns an array of Habilitation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Habilitation
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
