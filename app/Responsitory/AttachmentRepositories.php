<?php
namespace Xstore\Repositories;

use Rinvex\Repository\Repositories\EloquentRepository;

class AttachmentRepositories extends EloquentRepository
{
    protected $repositoryId = 'rinvex.repository.attachment';
    protected $model = 'Xstore\Models\Attachment';
}