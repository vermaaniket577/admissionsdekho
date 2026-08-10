<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'template_name',
        'content',
    ];

    /**
     * Polymorphic SEO Metadata relationship.
     */
    public function seo(): MorphOne
    {
        return $this->morphOne(SeoMetadata::class, 'model');
    }
}
