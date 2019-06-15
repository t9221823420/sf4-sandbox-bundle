<?php

namespace yozh\SandboxBundle\Repository;

use yozh\SandboxBundle\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    /**
     * ProductRepository constructor.
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Product::class);
    }
    
    /**
     * @param string $name
     * @return Product|null
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findOneByMemberId(string $name): ?Product
    {
        $Product = $this->createQueryBuilder('p')
                        ->andWhere('p.name = :val')
                        ->setParameter('val', $member_id)
                        ->getQuery()
                        ->getOneOrNullResult()
        ;
        
        return $Product;
    }
    
}
