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
     * @param $profileId
     * @return Movie[]
     */
    public function getLikedMoviesByProfile($profileId): array
    {
        return $this->createQueryBuilder('movie')
            ->select('movie')
            ->addSelect('categories')
            ->addSelect('profile')
            ->addSelect('episodes')
            ->leftJoin('movie.categories', 'categories')
            ->leftJoin('movie.likedBy', 'profile')
            ->leftJoin('movie.categories', 'category')
            ->leftJoin('movie.episodes', 'episodes')
            ->andWhere('profile.id = :profileId')
            ->andWhere('movie.active = :enabled')
            ->setParameter('profileId', $profileId)
            ->setParameter('enabled', true)
            ->getQuery()
            ->getArrayResult();
    }

    /**
     * @param $category
     * @return Movie[] Returns an array of Movie objects
     */
    public function getMoviesByCategory($category): array
    {
        return $this->createQueryBuilder('movie')
            ->select('movie')
            ->addSelect('categories')
            ->addSelect('profiles')
            ->addSelect('episodes')                      // select what you want
            ->leftJoin('movie.categories', 'categories')
            ->leftJoin('movie.likedBy', 'profiles')
            ->leftJoin('movie.categories', 'category')
            ->leftJoin('movie.episodes', 'episodes')   // join the selected table
            ->andWhere('category.name = :categoryName')
            ->andWhere('movie.active = :enabled')
            ->setParameter('categoryName', $category)
            ->setParameter('enabled', true)
            ->getQuery()
            ->getArrayResult();
    }

//        public function getLikedMoviesByCurrentUser()
//    {
//        return $this->createQueryBuilder('movie')
//            ->andWhere('movie.likes like 1')
//            ->getQuery()
//            ->getResult();
//    }


    public function recentlyAdd(): array|float|int|string
    {
        return $this->createQueryBuilder('movie')
            ->select('movie')
            ->addSelect('categories')
            ->addSelect('profiles')
            ->addSelect('episodes')
            ->leftJoin('movie.categories', 'categories')
            ->leftJoin('movie.likedBy', 'profiles')
            ->leftJoin('movie.episodes', 'episodes')
            ->orderBy('movie.id', 'ASC')
            ->andWhere('movie.active like :enabled')
            ->setParameter('enabled', true )
            ->setMaxResults(100)
            ->getQuery()
            ->getArrayResult();
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


    public function search($value): array|float|int|string
    {
        return $this->createQueryBuilder('movie')
            ->select('movie')
            ->addSelect('categories')
            ->addSelect('profiles')
            ->addSelect('episodes')
            ->leftJoin('movie.categories', 'categories')
            ->leftJoin('movie.likedBy', 'profiles')
            ->leftJoin('movie.categories', 'category')
            ->leftJoin('movie.episodes', 'episodes')
            ->andWhere('movie.title like :val')
            ->andWhere('movie.active like :enabled')
            ->setParameter('val', $value . '%')
            ->setParameter('enabled', true )
            ->orderBy('movie.title', 'ASC')
            ->getQuery()
            ->getArrayResult();
    }
    public function findMovieById($id)
    {
        return $this->createQueryBuilder('movie')
            ->andWhere('movie.id = :val')
            ->setParameter('val', $id)
            ->orderBy('movie.id', 'ASC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult()
            ;
    }

}
