<?php

namespace App\QueryBuilders;

use App\Models\Competence;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class CompetenciesQueryBuilder extends QueryBuilder
{
  public Builder $model;

  public function __construct()
  {
    $this->model = Competence::query();
  }

  function getAll(): Collection
  {
    return $this->model->orderBy('name')->get();
  }

  /**
   * @return Collection
   */
  public function getActiveCompetence(): Collection
  {
    return $this->model->where('active', '1')->orderBy('name')->get();
  }
}
