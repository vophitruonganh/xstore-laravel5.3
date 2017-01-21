<?php
namespace Xstore\Repositories;

use Rinvex\Repository\Repositories\EloquentRepository;

class ProductCategoryRepositories extends EloquentRepository
{
    protected $repositoryId = 'rinvex.repository.productcategory';
    protected $model = 'Xstore\Models\ProductCategory';
}