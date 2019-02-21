<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\ResetPasswordRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ResetPasswordRequestRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ResetPasswordRequest::class);
    }

    public function findOneBy(array $criteria, array $orderBy = null): ?ResetPasswordRequest
    {
        return parent::findOneBy($criteria, $orderBy);
    }
}