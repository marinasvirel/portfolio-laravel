<?php

namespace App\QueryBuilders;

use Illuminate\Database\Eloquent\Collection;

abstract class QueryBuilder
{
  /**
   * @return Collection
   */
  abstract function getAll(): Collection;

}
