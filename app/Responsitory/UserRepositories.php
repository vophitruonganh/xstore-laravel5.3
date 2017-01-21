<?php
namespace Xstore\Repositories;

use Rinvex\Repository\Repositories\EloquentRepository;

class UserRepositories extends EloquentRepository
{
    protected $repositoryId = 'rinvex.repository.user';
    protected $model = 'Xstore\Models\User';
}