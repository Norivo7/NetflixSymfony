<?php

namespace App\Repository;

use App\Entity\Movie;
use App\Entity\User;
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
     * @param $category
     * @return Movie[] Returns an array of Movie objects
     */
    public function getMoviesByCategory($category)
    {
        return $this->createQueryBuilder('movie')
            ->select('movie', 'category')
            ->leftJoin('movie.categories', 'category')
            ->andWhere('category.name = :categoryName')
            ->setParameter('categoryName', $category)
            ->getQuery()
            ->getResult();
    }

//        public function getLikedMoviesByCurrentUser()
//    {
//        return $this->createQueryBuilder('movie')
//            ->andWhere('movie.likes like 1')
//            ->getQuery()
//            ->getResult();
//    }


    public function recentlyAdd()
    {
        return $this->createQueryBuilder('movie')
            ->orderBy('movie.id', 'ASC')
            ->setMaxResults(30)
            ->getQuery()
            ->getResult();
    }


    public function popularFilter()
    {
        return $this->createQueryBuilder('movie')
            ->andWhere('movie.likes > :val')
            ->setParameter('val', 12)
            ->orderBy('movie.id', 'DESC')
            ->setMaxResults(12)
            ->getQuery()
            ->getResult();
    }


    public function search($value)
    {
        return $this->createQueryBuilder('movie')
            ->andWhere('movie.title like :val')
            ->setParameter('val', $value.'%')
            ->orderBy('movie.title','ASC')
            ->getQuery()
            ->getResult();
    }


}
