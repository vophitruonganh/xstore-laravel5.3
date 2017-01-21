<?php
namespace Xstore\Repositories;

use Rinvex\Repository\Repositories\EloquentRepository;

class CategoryRepositories extends EloquentRepository
{
    protected $repositoryId = 'rinvex.repository.category';
    protected $model = 'Xstore\Models\Category';
}