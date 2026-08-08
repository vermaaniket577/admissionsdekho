<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class SeoMetadata extends Model
{
    use HasFactory;

    protected $table = 'seo_metadata';

    protected $fillable = [
        'model_type',
        'model_id',
        'meta_title',
        'meta_description',
        'canonical_url',
        'og_image',
        'schema_type',
    ];

    /**
     * Get the parent model (Page, Post, Course, etc.)
     */
    public function model(): MorphTo
    {
        return $this->morphTo();
    }
}
