<?php

namespace App\Repository;

use App\Entity\TypeProduit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeProduit|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeProduit|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeProduit[] findAll()
 * @method TypeProduit[] findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeProduit::class);
    }
}
