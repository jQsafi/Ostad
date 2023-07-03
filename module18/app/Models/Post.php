<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'content',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPostsCountByCategoryId(int $categoryId): int
    {
        return $this->where('category_id', $categoryId)->count();
    }
    public function getSoftDeletedPosts(): Collection
    {
        return $this->onlyTrashed()->get();
    }
}


class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function getLatestPost(): ?Post
    {
        return $this->posts()->latest()->first();
    }
}