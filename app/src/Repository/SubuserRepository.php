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

    /**
     * @param $movieId
     * @return Subuser[]
     */
    public function getSubusersByLikedMovie($movieId): array
    {
        return $this->createQueryBuilder('subusers')
            ->select('subusers', 'movie')
            ->leftJoin('subusers.likedMovies', 'movie')
            ->where('movie.id = :movieId')
            ->setParameter('movieId', $movieId)
            ->getQuery()
            ->getArrayResult();
    }




    public function findSubuserById($id)
    {
        return $this->createQueryBuilder('subuser')
            ->andWhere('subuser.id LIKE :val')
            ->setParameter('val', $id)
            ->getQuery()
            ->getResult();
    }

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
