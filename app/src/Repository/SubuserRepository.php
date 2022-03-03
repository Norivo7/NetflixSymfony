<?php

namespace App\Repository;

use App\Entity\Subuser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Subuser|null find($id, $lockMode = null, $lockVersion = null)
 * @method Subuser|null findOneBy(array $criteria, array $orderBy = null)
 * @method Subuser[]    findAll()
 * @method Subuser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubuserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Subuser::class);
    }



    public function findSubuserById($id){
        return $this->createQueryBuilder('subuser')
            ->andWhere('subuser.id LIKE :val')
            ->setParameter('val', $id)
            ->getQuery()
            ->getResult();
    }
//    /**
//     * @param $subaccountId
//     * @param $userId
//     * @return Subuser[] Returns an array of Subuser objects
//     */
//    public function findSubuserById($subaccountId, $userId)
//    {
//        return $this->createQueryBuilder('subuser')
//            ->select('subuser', 'user')
//            ->leftJoin('subuser.subaccountOf', 'user')
//            ->andWhere('subuser.id LIKE :val')
//            ->andWhere('user.id LIKE :val2')
//            ->setParameter('val', $subaccountId)
//            ->setParameter('val2', $userId)
//            ->orderBy('subuser.id', 'ASC')
//            ->setMaxResults(5)
//            ->getQuery()
//            ->getResult();
//    }




    // /**
    //  * @return Subuser[] Returns an array of Subuser objects
    //  */
//    public function findSubusers($value)
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.subaccount_of_id = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(5)
//            ->getQuery()
//            ->getResult()
//        ;
//    }



    //  * @return Subuser[] Returns an array of Subuser objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
    /*
    public function findOneBySomeField($value): ?Subuser
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
