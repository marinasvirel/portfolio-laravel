<?php

namespace App\QueryBuilders;

use App\Models\Project;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class ProjectsQueryBuilder extends QueryBuilder
{
  public Builder $model;

  public function __construct()
  {
    $this->model = Project::query();
  }

  function getAll(): Collection
  {
    return $this->model->get();
  }

}
