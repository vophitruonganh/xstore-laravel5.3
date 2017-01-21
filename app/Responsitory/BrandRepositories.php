<?php
namespace Xstore\Repositories;

use Rinvex\Repository\Repositories\EloquentRepository;

class BrandRepositories extends EloquentRepository
{
   	protected $repositoryId = 'rinvex.repository.brand';
    protected $model = 'Xstore\Models\Trademark';
}