<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'larablog_blogs';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'blog_id';

    /**
     * Get the Category that owns this blog post
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'blog_category', 'category_id');
    }

    /**
     * Get the Admin who owns this blog post
     */
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'blog_author', 'id');
    }
}
