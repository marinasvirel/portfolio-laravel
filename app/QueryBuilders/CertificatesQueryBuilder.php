<?php

namespace App\QueryBuilders;

use App\Models\Certificate;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class CertificatesQueryBuilder extends QueryBuilder
{
  public Builder $model;

  public function __construct()
  {
    $this->model = Certificate::query();
  }

  function getAll(): Collection
  {
    return $this->model->get();
  }

}
