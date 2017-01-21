<?php
namespace Xstore\Repositories;

use Rinvex\Repository\Repositories\EloquentRepository;

class DiscountRepositories extends EloquentRepository
{
    protected $repositoryId = 'rinvex.repository.product';
    protected $model = 'Xstore\Models\Discount';
}