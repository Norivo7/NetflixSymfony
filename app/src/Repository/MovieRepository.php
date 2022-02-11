<?php

namespace App\Repository;

use App\Entity\Movie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Movie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Movie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Movie[]    findAll()
 * @method Movie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MovieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Movie::class);
    }

     /**
      * @return Movie[] Returns an array of Movie objects
      */
    public function homeFilter($value) // 1 = tylko na netflix, 2 = seriale, 3 = filmy
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.category = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
            ;
    }
//    /**
//     * @return Movie[] Returns an array of Movie objects
//     */
//    public function homeFilter($value): array // 1 = tylko na netflix, 2 = seriale, 3 = filmy
//    {
//        $entityManager = $this->getEntityManager();
//
//        $query = $entityManager->createQuery(
//            'SELECT m
//                 FROM App\Entity\Movie m
//                 WHERE m.category = :val
//                 ORDER BY m.id DESC'
//        )->setParameter('val', $value);
//
//        return $query->getResult();
//    }

    /**
     * @return Movie[] Returns an array of Movie objects
     */
    public function recentlyAdd(): array
    {
        return $this->createQueryBuilder('m')
            ->orderBy('m.id', 'DESC')
            ->getQuery()
            ->setMaxResults(10)
            ->getResult()
            ;
    }

    /**
     * @return Movie[] Returns an array of Movie objects
     */
    public function search($value): array
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.title LIKE :val')
            ->setParameter('val', $value.'%')
            ->orderBy('m.title', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }


    /**
     * @return Movie[]
     */
    public function popularFilter(): array
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.likes > :val')
            ->setParameter('val',5)
            ->orderBy('m.id', 'DESC')
            ->setMaxResults(12)
            ->getQuery()
            ->getResult()
            ;
    }
    /**
     * @return Movie[] Returns an array of Movies objects
     */
    public function findByCategory($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.category = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'DESC')
            ->getQuery()
            ->getResult()
            ;
    }
    /**
     * @return Movie[] Returns an array of Movies objects
     */
    public function findByCategoryField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.category = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'DESC')
            ->getQuery()
            ->getResult()
            ;
    }

//
//   public function findByCategory($value): ?Movie
//   {
//       return $this->createQueryBuilder('m')
//           ->andWhere('m.exampleField = :val')
//           ->setParameter('val', $value)
//           ->getQuery()
//           ->getOneOrNullResult()
//       ;
//   }


    /*
    public function findOneBySomeField($value): ?Movie
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */



}
