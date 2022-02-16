<?php

namespace App\Repository;

use App\Entity\Category;
use App\Entity\Movie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Category|null find($id, $lockMode = null, $lockVersion = null)
 * @method Category|null findOneBy(array $criteria, array $orderBy = null)
 * @method Category[]    findAll()
 * @method Category[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Category::class);
    }

    /**
     * @param $movie
     * @return Category[] Returns an array of Movie objects
     */
    public function getCategoryByMovie($movie)
    {
        return $this->createQueryBuilder('category')
            ->select('category', 'movie')
            ->leftJoin('category.movies', 'movie')
            ->where('movie.title = :movieName')
            ->setParameter('movieName', $movie)
            ->getQuery()
            ->getArrayResult();
    }
}