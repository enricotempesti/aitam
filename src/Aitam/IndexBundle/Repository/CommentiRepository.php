<?php

namespace Aitam\IndexBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CommentiRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentiRepository extends EntityRepository
{
	public function getCommentiForarticolo($articoloId, $approved = true)
	{
		$qb = $this->createQueryBuilder('c')
		->select('c')
		->where('c.articolo = :articolo_id')
		->addOrderBy('c.created')
		->setParameter('articolo_id', $articoloId);
	
		if (false === is_null($approved))
			$qb->andWhere('c.approved = :approved')
			->setParameter('approved', $approved);
	
		return $qb->getQuery()
		->getResult();
	}
	
	public function getLatestCommenti($limit = 15)
	{
		$qb = $this->createQueryBuilder('c')
		->select('c')
		->addOrderBy('c.id', 'DESC');
	
		if (false === is_null($limit))
			$qb->setMaxResults($limit);
	
		return $qb->getQuery()
		->getResult();
	}
	
}