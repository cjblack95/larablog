<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'larablog_categories';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'category_id';

    /**
     * Get the Blog Posts for the Category.
     */
    public function blogs()
    {
        return $this->hasMany(Blog::class, 'blog_category', 'category_id');
    }
}
