<?php

namespace App\Repository;

use App\QueryBuilders\CompetenciesQueryBuilder;
use App\QueryBuilders\QueryBuilder;
use App\QueryBuilders\UsersQueryBuilder;

class MainRepository
{
  public QueryBuilder $userQueryBuilder;
  public QueryBuilder $competenciesQueryBuilder;

  public function __construct(CompetenciesQueryBuilder $competenciesQueryBuilder, UsersQueryBuilder $userQueryBuilder)
  {
    $this->userQueryBuilder = $userQueryBuilder;
    $this->competenciesQueryBuilder = $competenciesQueryBuilder;
  }

  public function getData(): array
  {
    $data = array();
    $data['user'] = $this->userQueryBuilder->getAll();
    $data['competencies'] = $this->competenciesQueryBuilder->getActiveCompetence();
    return $data;
  }

}
