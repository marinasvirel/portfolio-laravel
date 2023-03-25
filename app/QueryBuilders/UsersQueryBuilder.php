<?php

namespace App\QueryBuilders;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class UsersQueryBuilder extends QueryBuilder
{
  public Builder $model;

  public function __construct()
  {
    $this->model = User::query();
  }

  function getAll(): Collection
  {
    return $this->model->get();
  }

  /**
   * @param int $userId
   * @return Collection
   */
  function getUserById(int $userId): Collection
  {
    return $this->model->where('id', $userId)->get();
  }
}
