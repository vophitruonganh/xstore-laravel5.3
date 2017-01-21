<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttachmentTheme
 */
class AttachmentTheme extends Model
{
    protected $table = 'attachment_theme';

    public $timestamps = false;

    protected $fillable = [
        'attachment_id',
        'theme_id'
    ];

    protected $guarded = [];

        
}