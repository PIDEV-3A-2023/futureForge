<?php

namespace App\Repository;

use App\Entity\Event;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Event>
 *
 * @method Event|null find($id, $lockMode = null, $lockVersion = null)
 * @method Event|null findOneBy(array $criteria, array $orderBy = null)
 * @method Event[]    findAll()
 * @method Event[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Event::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Event $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Event $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Event[] Returns an array of Event objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Event
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function findAllJoinedToCategory()
{
    $qb = $this->createQueryBuilder('e')
        ->leftJoin('e.categorie', 'c')
        ->addSelect('c');

    return $qb->getQuery()->getResult();
}
public function findBySearchQuery(string $searchQuery)
{
    return $this->createQueryBuilder('a')
        ->andWhere('a.title LIKE :searchQuery OR a.content LIKE :searchQuery')
        ->setParameter('searchQuery', '%'.$searchQuery.'%')
        ->getQuery()
        ->getResult();
}
public function findBySearchCriteria(array $criteria): array
    {
        $qb = $this->createQueryBuilder('a');
    
        if (isset($criteria['nom'])) {
            $qb->andWhere('a.nom LIKE :nom')
                ->setParameter('nom', '%' . $criteria['nom'] . '%');
        }
    
        if (isset($criteria['categorie'])) {
            $qb->join('a.categorie', 'c')
               ->andWhere('c = :categorie')
               ->setParameter('categorie', $criteria['categorie']);
        }
    
    
        if (isset($criteria['type'])) {
            $qb->andWhere('a.type = :type')
                ->setParameter('type', $criteria['type']);
        }
        $resultats = $qb->getQuery()->getResult();
    
        return $resultats;
    }

    public function counteventByMonth()
    {
        $qb = $this->createQueryBuilder('a');
        $qb->select("SUBSTRING(a.date, 6, 2) as month, COUNT(a.id) as count")
           ->groupBy("month")
           ->orderBy("month", "ASC");
        $query = $qb->getQuery();
        $results = $query->getResult();
    
        $ByMonth = [];
        foreach ($results as $result) {
            $eventByMonth[$result['month']] = $result['count'];
        }
        
        return $eventByMonth;
    }
    public function counteventByCategorie()
{
    $results = $this->createQueryBuilder('e')
    ->select('c.nom_categ', 'count(e.id) as nb_events')
    ->join('e.categorie', 'c')
    ->groupBy('c.nom_categ')
    ->getQuery()
    ->getResult();


    $data = [];
    foreach ($results as $result) {
        $data[] = [
            'name' => $result['nom_categ'],
            'y' => (int) $result['nb_events'],
        ];
    }

    return $data;
}


}
