<?php

namespace App\Repository;

use App\Entity\Profile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Profile|null find($id, $lockMode = null, $lockVersion = null)
 * @method Profile|null findOneBy(array $criteria, array $orderBy = null)
 * @method Profile[]    findAll()
 * @method Profile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProfileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Profile::class);
    }

    /**
     * @param $movieId
     * @return Profile[]
     */
    public function getProfilesByLikedMovie($movieId): array
    {
        return $this->createQueryBuilder('Profiles')
            ->select('Profiles', 'movie')
            ->leftJoin('Profiles.likedMovies', 'movie')
            ->where('movie.id = :movieId')
            ->setParameter('movieId', $movieId)
            ->getQuery()
            ->getArrayResult();
    }




    public function findProfileById($id)
    {
        return $this->createQueryBuilder('Profile')
            ->andWhere('Profile.id LIKE :val')
            ->setParameter('val', $id)
            ->getQuery()
            ->getResult();
    }

    //  * @return Profile[] Returns an array of Profile objects
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
    public function findOneBySomeField($value): ?Profile
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
