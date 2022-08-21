<?php

namespace DabrosDkos\PermissionsManagerBundle\Repository;

use DabrosDkos\PermissionsManagerBundle\Model\PmGroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PmGroup>
 *
 * @method PmGroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method PmGroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method PmGroup[]    findAll()
 * @method PmGroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PmGroupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PmGroup::class);
    }

    public function add(PmGroup $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PmGroup $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PmGroup[] Returns an array of PmGroup objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PmGroup
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
