<?php
namespace Xstore\Repositories;

use Rinvex\Repository\Repositories\EloquentRepository;

class ProductRepositories extends EloquentRepository
{
    protected $repositoryId = 'rinvex.repository.product';
    protected $model = 'Xstore\Models\Product';
}