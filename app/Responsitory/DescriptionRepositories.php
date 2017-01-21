<?php
namespace Xstore\Repositories;

use Rinvex\Repository\Repositories\EloquentRepository;

class DescriptionRepositories extends EloquentRepository
{
    protected $repositoryId = 'rinvex.repository.description';
    protected $model = 'Xstore\Models\Description';
}