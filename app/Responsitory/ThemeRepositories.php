<?php
namespace Xstore\Repositories;
use Xstore\Models\Theme;
use Rinvex\Repository\Repositories\EloquentRepository;

class ThemeRepositories extends EloquentRepository
{
    protected $repositoryId = 'rinvex.repository.theme';
    protected $model = 'Xstore\Models\Theme';
}