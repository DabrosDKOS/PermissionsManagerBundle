<?php

namespace DabrosDkos\PermissionsManagerBundle\Repository;

use DabrosDkos\PermissionsManagerBundle\Entity\PmRoles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PmRoles>
 *
 * @method PmRoles|null find($id, $lockMode = null, $lockVersion = null)
 * @method PmRoles|null findOneBy(array $criteria, array $orderBy = null)
 * @method PmRoles[]    findAll()
 * @method PmRoles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PmRolesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PmRoles::class);
    }

    public function add(PmRoles $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PmRoles $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PmRoles[] Returns an array of PmRoles objects
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

//    public function findOneBySomeField($value): ?PmRoles
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
