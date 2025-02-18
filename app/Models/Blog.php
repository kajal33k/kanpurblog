<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;


        protected $fillable = ['title', 'description', 'category_id', 'author_id', 'image'];
    
        public function category()
        {
            return $this->belongsTo(Category::class);
        }
    
        public function author()
        {
            return $this->belongsTo(User::class, 'author_id');
        }
}

    