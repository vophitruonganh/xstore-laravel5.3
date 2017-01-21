<?php
namespace Xstore\Repositories;

use Rinvex\Repository\Repositories\EloquentRepository;

class ProductBrandRepositories extends EloquentRepository
{
    protected $repositoryId = 'rinvex.repository.producttrademark';
    protected $model = 'Xstore\Models\ProductTrademark';
}